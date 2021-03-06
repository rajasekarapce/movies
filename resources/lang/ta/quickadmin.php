<?php

return [
	
	'user-management' => [
		'title' => 'User management',
		'fields' => [
		],
	],
	'menus' => [
	'home' => 'Home',
	'movies' => 'திரைப்படங்கள்',
	],
	'projects' => [
		'title' => 'Projects',
		'singular' => 'Project',
		'create_success' => 'Project created successfully',
		'update_success' => 'Project updated successfully',
		'delete_success' => 'Project deleted successfully',
		'fields' => [
			'name' => 'Name',
			'project_type' => 'Project Type',
			'name_de' => 'Name (German)',
			'name_en' => 'Name (English)',
			'name_fr' => 'Name (French)',
			'amount' => 'Amount',
			'min_amount' => 'Min. Amount',
			'interest_rate' => 'Interest rate',
			'lowest_interest_rate' => 'Lowest Interest rate',
			'loan_term' => 'Loan Term',
				],
	],
	'roles' => [
		'title' => 'Roles',
		'create_success' => 'Role created successfully',
		'update_success' => 'Role updated successfully',
		'delete_success' => 'Role deleted successfully',
		'fields' => [
			'title' => 'Title',
		],
	],
	'languages' => [
		'title' => 'Languages',
		'singular_title' => 'Language',
		'create_success' => 'Language created successfully',
		'update_success' => 'Language updated successfully',
		'delete_success' => 'Language deleted successfully',
		'fields' => [
			'page' => 'Page',
			'comments' => 'Comments',
			'de' => 'German',
			'en' => 'English',
			'fr' => 'French',
			'it' => 'Italian',
			'es' => 'Spanish',
			'ta' => 'Tamil',
			'status' => 'Status',
		],
	],
	
	'customers' => [
		'title' => 'Customers',
		'singular_title' => 'Customer',
		'create_success' => 'Customer created successfully',
		'update_success' => 'Customer updated successfully',
		'profile_update_success' => 'Profile updated successfully',
		'delete_success' => 'Customer deleted successfully',
		'fields' => [
			'nickname' => 'Nick Name',
			'firstname' => 'First Name',
			'middlename' => 'middlename',
			'lastname' => 'Last name',
			'rating' => 'Rating',
			'sex' => 'Sex',
			'dob' => 'DOB',
			'email' => 'Email',
			'nationality' => 'Nationality',
			'language' => 'Language',
			'password' => 'Password',
			'verified_employee' => 'Verified Employee',
			'documentation_verified' => 'Documentation Verified',
			'same_residence_since' => 'Profile Image',
			'bank_ac' => 'Bank A/C',
			'insurance' => 'Insurance',
			'residence' => 'Residence',
			'income' => 'Income',
			'living' => 'Living',
			'health_insurance' => 'Health insurance',
			'max_monthly_installment' => 'Maximum Monthly installment',
			'available_amount' => 'Available Amount',
			'free_cash' => 'Free Cash',
			'collateral' => 'Collateral',
			'status' => 'Status',
			'profile_image' => 'Profile Image',
		],
	],

	'images' => [
		'title' => 'Document',
		'singular_title' => 'Document',
		'create_success' => 'Document uploaded successfully',
		'update_success' => 'Document updated successfully',
		'profile_update_success' => 'Profile updated successfully',
		'delete_success' => 'Document deleted successfully',
		'fields' => [
			'project' => 'Project',
			'customer' => 'Customer',
			'employee' => 'Employee',
			'document' => 'Document',
			'status' => 'Status',
		],
	],
	
	
	
	'qa_create' => 'Create',
	'qa_profile' => 'Profile',
	'qa_submit' => 'Submit',
	'qa_enable' => 'Enable',
	'qa_disable' => 'Disable',
	'qa_save' => 'Save',
	'qa_upload' => 'Upload',
	'qa_accept' => 'Accept',
	'qa_reject' => 'Reject',
	'qa_decision_pending' => 'Decision Pending',
	'qa_uploads' => 'My Requirements',
	'qa_edit' => 'Edit',
	'qa_reply' => 'Reply',
	'qa_restore' => 'Restore',
	'qa_permadel' => 'Delete Permanently',
	'qa_all' => 'All',
	'qa_trash' => 'Trash',
	'qa_view' => 'View',
	'qa_update' => 'Update',
	'qa_list' => 'List',
	'qa_no_entries_in_table' => 'No entries in table',
	'qa_custom_controller_index' => 'Custom controller index.',
	'qa_logout' => 'Logout',
	'qa_add_new' => 'Add new',
	'qa_upload_new_req' => 'Upload new requirement',
	'qa_upload_max_size_2mb_err' => 'File size should be less than or equal to 2 MB ', 
	'qa_are_you_sure' => 'Are you sure?',
	'qa_back_to_list' => 'Back to list',
	'qa_dashboard' => 'Dashboard',
	'qa_delete' => 'Delete',
	'qa_delete_selected' => 'Delete selected',
	'qa_approve_selected' => 'Approve selected',
	'qa_accept_selected' => 'Accept selected',
	'qa_approve' => 'Approve',
	'qa_disable_selected' => 'Disable selected',
	'qa_disable' => 'Disable',
	'qa_requote_selected' => 'Requote selected',
	'qa_requote' => 'Requote',
	'qa_reschedule' => 'Reschedule',
	'qa_reschedule_at' => 'Reschedule At',
	'qa_actualschedule' => 'Actual schedule',
	'qa_quote' => 'Quote',
	'qa_schedule_meet' => 'Schedule meet',
	'qa_meet' => 'Meet',
	'qa_read_selected' => 'Mark as read selected',
	'qa_reschedule_selected' => 'Reschedule selected',
	'qa_reject_selected' => 'Reject selected',
	'qa_preference' => 'Preference',
	'qa_pref_update_success' => 'Preference updated successfully',
	'qa_account_not_active' => 'Your account is yet to be approved. It should be active within 5 business days. If your account not active within 5 business days, Please feel free to contact administrator',
	'qa_category_preference_selected' => 'Selected Categories',
	'qa_subcategory_preference_selected' => 'Selected Sub Categories',
	'qa_brands_preference_selected' => 'Selected Brands',
	'qa_states_selected' => 'Selected States',
	'qa_upgrade' => 'Upgrade',
	'qa_preference_note' => 'Please Select "All" in State if you supply all over India. Leave district blank',
	'qa_districts_selected' => 'Selected Districts',
	'qa_category' => 'Category',
	'qa_district' => 'District',
	'qa_state' => 'State',
	'qa_categories' => 'Categories',
	'qa_sample_category' => 'Sample category',
	'qa_questions' => 'Questions',
	'qa_question' => 'Question',
	'qa_answer' => 'Answer',
	'qa_sample_question' => 'Sample question',
	'qa_sample_answer' => 'Sample answer',
	'qa_faq_management' => 'FAQ Management',
	'qa_administrator_can_create_other_users' => 'Administrator (can create other users)',
	'qa_simple_user' => 'Simple user',
	'qa_title' => 'Title',
	'qa_roles' => 'Roles',
	'qa_role' => 'Role',
	'qa_user_management' => 'User management',
	'qa_customers' => 'Users',
	'qa_user' => 'User',
	'qa_name' => 'Name',
	'qa_email' => 'Email',
	'qa_password' => 'Password',
	'qa_remember_token' => 'Remember token',
	'qa_permissions' => 'Permissions',
	'qa_user_actions' => 'User actions',
	'qa_action' => 'Action',
	'qa_action_model' => 'Action model',
	'qa_action_id' => 'Action id',
	'qa_time' => 'Time',
	'qa_campaign' => 'Campaign',
	'qa_campaigns' => 'Campaigns',
	'qa_description' => 'Description',
	'qa_valid_from' => 'Valid from',
	'qa_valid_to' => 'Valid to',
	'qa_discount_amount' => 'Discount amount',
	'qa_discount_percent' => 'Discount percent',
	'qa_coupons_amount' => 'Coupons amount',
	'qa_coupons' => 'Coupons',
	'qa_code' => 'Code',
	'qa_redeem_time' => 'Redeem time',
	'qa_coupon_management' => 'Coupon Management',
	'qa_time_management' => 'Time management',
	'qa_projects' => 'Projects',
	'qa_reports' => 'Reports',
	'qa_time_entries' => 'Time entries',
	'qa_work_type' => 'Work type',
	'qa_work_types' => 'Work types',
	'qa_project' => 'Project',
	'qa_start_time' => 'Start time',
	'qa_end_time' => 'End time',
	'qa_expense_category' => 'Expense Category',
	'qa_expense_categories' => 'Expense Categories',
	'qa_expense_management' => 'Expense Management',
	'qa_expenses' => 'Expenses',
	'qa_expense' => 'Expense',
	'qa_entry_date' => 'Entry date',
	'qa_amount' => 'Amount',
	'qa_income_categories' => 'Income categories',
	'qa_monthly_report' => 'Monthly report',
	'qa_companies' => 'Companies',
	'qa_company_name' => 'Company name',
	'qa_address' => 'Address',
	'qa_website' => 'Website',
	'qa_contact_management' => 'Contact management',
	'qa_contacts' => 'Contacts',
	'qa_company' => 'Company',
	'qa_first_name' => 'First name',
	'qa_last_name' => 'Last name',
	'qa_phone' => 'Phone',
	'qa_phone1' => 'Phone 1',
	'qa_phone2' => 'Phone 2',
	'qa_skype' => 'Skype',
	'qa_photo' => 'Photo (max 8mb)',
	'qa_category_name' => 'Category name',
	'qa_product_management' => 'Product management',
	'qa_products' => 'Products',
	'qa_product_name' => 'Product name',
	'qa_price' => 'Price',
	'qa_tags' => 'Tags',
	'qa_tag' => 'Tag',
	'qa_photo1' => 'Photo1',
	'qa_photo2' => 'Photo2',
	'qa_photo3' => 'Photo3',
	'qa_calendar' => 'Calendar',
	'qa_statuses' => 'Statuses',
	'qa_task_management' => 'Task management',
	'qa_tasks' => 'Tasks',
	'qa_status' => 'Status',
	'qa_attachment' => 'Attachment',
	'qa_due_date' => 'Due date',
	'qa_assigned_to' => 'Assigned to',
	'qa_assets' => 'Assets',
	'qa_asset' => 'Asset',
	'qa_serial_number' => 'Serial number',
	'qa_location' => 'Location',
	'qa_locations' => 'Locations',
	'qa_assigned_user' => 'Assigned (user)',
	'qa_notes' => 'Notes',
	'qa_assets_history' => 'Assets history',
	'qa_assets_management' => 'Assets management',
	'qa_slug' => 'Slug',
	'qa_content_management' => 'Content management',
	'qa_text' => 'Text',
	'qa_excerpt' => 'Excerpt',
	'qa_featured_image' => 'Featured image',
	'qa_pages' => 'Pages',
	'qa_axis' => 'Axis',
	'qa_show' => 'Show',
	'qa_group_by' => 'Group by',
	'qa_chart_type' => 'Chart type',
	'qa_create_new_report' => 'Create new report',
	'qa_no_reports_yet' => 'No reports yet.',
	'qa_created_at' => 'Created at',
	'qa_updated_at' => 'Updated at',
	'qa_deleted_at' => 'Deleted at',
	'qa_reports_x_axis_field' => 'X-axis - please choose one of date/time fields',
	'qa_reports_y_axis_field' => 'Y-axis - please choose one of number fields',
	'qa_select_crud_placeholder' => 'Please select one of your CRUDs',
	'qa_select_dt_placeholder' => 'Please select one of date/time fields',
	'qa_aggregate_function_use' => 'Aggregate function to use',
	'qa_x_axis_group_by' => 'X-axis group by',
	'qa_x_axis_field' => 'X-axis field (date/time)',
	'qa_y_axis_field' => 'Y-axis field',
	'qa_integer_float_placeholder' => 'Please select one of integer/float fields',
	'qa_change_notifications_field_1_label' => 'Send email notification to User',
	'qa_change_notifications_field_2_label' => 'When Entry on CRUD',
	'qa_select_customers_placeholder' => 'Please select one of your Users',
	'qa_is_created' => 'is created',
	'qa_is_updated' => 'is updated',
	'qa_is_deleted' => 'is deleted',
	'qa_notifications' => 'Notifications',
	'qa_notify_user' => 'Notify User',
	'qa_when_crud' => 'When CRUD',
	'qa_create_new_notification' => 'Create new Notification',
	'qa_stripe_transactions' => 'Stripe Transactions',
	'qa_upgrade_to_premium' => 'Upgrade to Premium',
	'qa_messages' => 'Messages',
	'qa_you_have_no_messages' => 'You have no messages.',
	'qa_all_messages' => 'All Messages',
	'qa_new_message' => 'New message',
	'qa_outbox' => 'Outbox',
	'qa_inbox' => 'Inbox',
	'qa_recipient' => 'Recipient',
	'qa_subject' => 'Subject',
	'qa_message' => 'Message',
	'qa_send' => 'Send',
	'qa_reply' => 'Reply',
	'qa_calendar_sources' => 'Calendar sources',
	'qa_new_calendar_source' => 'Create new calendar source',
	'qa_crud_title' => 'Crud title',
	'qa_crud_date_field' => 'Crud date field',
	'qa_prefix' => 'Prefix',
	'qa_label_field' => 'Label field',
	'qa_suffix' => 'Sufix',
	'qa_no_calendar_sources' => 'No calendar sources yet.',
	'qa_crud_event_field' => 'Event label field',
	'qa_create_new_calendar_source' => 'Create new Calendar Source',
	'qa_edit_calendar_source' => 'Edit Calendar Source',
	'qa_client_management' => 'Client management',
	'qa_client_management_settings' => 'Client management settings',
	'qa_country' => 'Country',
	'qa_client_status' => 'Client status',
	'qa_clients' => 'Clients',
	'qa_client_statuses' => 'Client statuses',
	'qa_currencies' => 'Currencies',
	'qa_main_currency' => 'Main currency',
	'qa_documents' => 'Documents',
	'qa_file' => 'File',
	'qa_income_source' => 'Income source',
	'qa_income_sources' => 'Income sources',
	'qa_fee_percent' => 'Fee percent',
	'qa_note_text' => 'Note text',
	'qa_client' => 'Client',
	'qa_update_profile' => 'Update profile',
	'qa_edit_profile' => 'Edit profile',
	'qa_start_date' => 'Start date',
	'qa_budget' => 'Budget',
	'qa_project_status' => 'Project status',
	'qa_project_statuses' => 'Project statuses',
	'qa_transactions' => 'Transactions',
	'qa_transaction_types' => 'Transaction types',
	'qa_transaction_type' => 'Transaction type',
	'qa_transaction_date' => 'Transaction date',
	'qa_currency' => 'Currency',
	'qa_current_password' => 'Current password',
	'qa_new_password' => 'New password',
	'qa_password_confirm' => 'New password confirmation',
	'qa_dashboard_text' => 'You are logged in!',
	'qa_forgot_password' => 'Forgot your password?',
	'qa_remember_me' => 'Remember me',
	'qa_login' => 'Login',
	'qa_change_password' => 'Change password',
	'qa_csv' => 'CSV',
	'qa_print' => 'Print',
	'qa_excel' => 'Excel',
	'qa_copy' => 'Copy',
	'qa_colvis' => 'Column visibility',
	'qa_pdf' => 'PDF',
	'qa_reset_password' => 'Reset password',
	'qa_reset_password_woops' => '<strong>Whoops!</strong> There were problems with input:',
	'qa_email_line1' => 'You are receiving this email because we received a password reset request for your account.',
	'qa_email_line2' => 'If you did not request a password reset, no further action is required.',
	'qa_email_greet' => 'Hello',
	'qa_email_regards' => 'Regards',
	'qa_confirm_password' => 'Confirm password',
	'qa_if_you_are_having_trouble' => 'If you’re having trouble clicking the',
	'qa_copy_paste_url_bellow' => 'button, copy and paste the URL below into your web browser:',
	'qa_please_select' => 'Please select',
	'qa_register' => 'Register',
	'qa_registration' => 'Registration',
	'qa_not_approved_title' => 'You are not approved',
	'qa_not_approved_p' => 'Your account is still not approved by administrator. Please, be patient and try again later.',
	'qa_there_were_problems_with_input' => 'There were problems with input',
	'qa_whoops' => 'Whoops!',
	'qa_file_contains_header_row' => 'File contains header row?',
	'qa_csvImport' => 'CSV Import',
	'qa_csv_file_to_import' => 'CSV file to import',
	'qa_parse_csv' => 'Parse CSV',
	'qa_import_data' => 'Import data',
	'qa_imported_rows_to_table' => 'Imported :rows rows to :table table',
	'qa_subscription-billing' => 'Subscriptions',
	'qa_subscription-payments' => 'Payments',
	'qa_basic_crm' => 'Basic CRM',
	'qa_customers' => 'Customers',
	'qa_customer' => 'Customer',
	'qa_select_all' => 'Select all',
	'qa_deselect_all' => 'Deselect all',
	'qa_team-management' => 'Teams',
	'quickadmin_title' => 'Valivillori',
];