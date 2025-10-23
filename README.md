# finkit-2

## Предложения по организации кода

С ростом числа страниц и модулей (например, при добавлении новых разделов) навигация по файлам станет менее очевидной.  
Чтобы упростить поддержку проекта, предлагаю провести лёгкий рефакторинг на модель MVC.

Например:
```text
/app/
|─core/ # доступ к MySQL (PDO), маршрутизация, шаблонизатор, вспомогательные функции paginator()
|─models/
	|─class_user.php
	|─class_plot.php
	|─class_session.php
|─controllers/
    |─controller_user.php
    |─controller_plot.php
    |─controller_auth.php
    |─controller_search.php
	
/pages/
|─plots.html
|─users.html
|─auth.html
|─components/
	|─plots_table.html
	|─users_table.html
	|─plot_edit.html
	|─user_edit.html
	|─user_delete.html	
|─assets/
	|─css/
		...
	|—js/
		|—common.js/
		|—plots.js
		|—users.js
```
2) Вместо выполнения физического DELETE FROM users предлагаю добавить в таблицу users столбец is_deleted (0/1) и при удалении выполнять:
UPDATE users SET is_deleted = 1 WHERE user_id = ...
Такой подход позволит сохранить историю и связи (участки, сессии и т.д.), избежать случайной потери данных, при необходимости восстановить пользователя (is_deleted = 0).    
