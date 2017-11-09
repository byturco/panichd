<?php

return [

 /*
  *  Constants
  */
  'nav-settings'                  => 'Settings',
  'nav-agents'                    => 'Agents',
  'nav-dashboard'                 => 'Dashboard',
  'nav-dashboard-title'           => 'Administrator dashboard',
  'nav-categories'                => 'Categories',
  'nav-priorities'                => 'Priorities',
  'nav-statuses'                  => 'Statuses',
  'nav-dept-users'                => 'Department users',
  'nav-configuration'             => 'Configuration',
  'nav-administrator'             => 'Administrator',  //new

  'table-hash'                    => '#',
  'table-id'                      => 'ID',
  'table-name'                    => 'Name',
  'table-create-level'            => 'New tickets',
  'table-action'                  => 'Action',
  'table-categories'              => 'Categories',
  'table-categories-autoasg-title'=> 'Autoassign for new tickets',
  'table-remove-agent'            => 'Remove from agents',
  'table-remove-administrator'    => 'Remove from administrators', // New

  'table-slug'                    => 'Slug',
  'table-default'                 => 'Default Value',
  'table-value'                   => 'My Value',
  'table-lang'                    => 'Lang',
  'table-edit'                    => 'Edit',

  'btn-back'                      => 'Back',
  'btn-change'                    => 'Change',
  'btn-create'                    => 'Create',
  'btn-delete'                    => 'Delete',
  'btn-edit'                      => 'Edit',
  'btn-join'                      => 'Join',
  'btn-remove'                    => 'Remove',
  'btn-submit'                    => 'Submit',
  'btn-save'                      => 'Save',
  'btn-update'                    => 'Update',

  'colon'                         => ': ',

  /* Access Levels */
  'level-1'                       => 'Everyone',
  'level-2'                       => 'assigned agents + admins.',
  'level-3'                       => 'admins.',
  
 /*
  *  Page specific
  */

// tickets-admin/____
  'index-title'                         => 'Tickets System Dashboard',
  'index-empty-records'                 => 'No tickets yet',
  'index-total-tickets'                 => 'Total tickets',
  'index-open-tickets'                  => 'Open tickets',
  'index-closed-tickets'                => 'Closed tickets',
  'index-performance-indicator'         => 'Performance Indicator',
  'index-periods'                       => 'Periods',
  'index-3-months'                      => '3 months',
  'index-6-months'                      => '6 months',
  'index-12-months'                     => '12 months',
  'index-tickets-share-per-category'    => 'Tickets share per category',
  'index-tickets-share-per-agent'       => 'Tickets share per agent',
  'index-categories'                    => 'Categories',
  'index-category'                      => 'Category',
  'index-agents'                        => 'Agents',
  'index-agent'                         => 'Agent',
  'index-administrators'                => 'Administrators',  //new
  'index-administrator'                 => 'Administrator',  //new
  'index-users'                         => 'Users',
  'index-user'                          => 'User',
  'index-tickets'                       => 'Tickets',
  'index-open'                          => 'Open',
  'index-closed'                        => 'Closed',
  'index-total'                         => 'Total',
  'index-month'                         => 'Month',
  'index-performance-chart'             => 'How many days in average to resolve a ticket?',
  'index-categories-chart'              => 'Tickets distribution per category',
  'index-agents-chart'                  => 'Tickets distribution per Agent',

// tickets-admin/agent/____
  'agent-index-title'             => 'Agent Management',
  'agent-index-no-agents'         => 'There are no agents',
  'agent-index-create-new'        => 'Add agent',
  'agent-create-form-agent'       => 'User',
  'agent-create-add-agents'       => 'Add Agents',
  'agent-create-no-users'         => 'There are no user accounts, create user accounts first.',
  'agent-store-ok'                => 'User ":name" has been added to agents',
  'agent-updated-ok'              => 'Agent ":name" updated successfully',
  'agent-excluded-ok'             => 'Agent ":name" excluded from agents',
  
  'agent-store-error-no-category' => 'To add an agent you must check at least one category',

// tickets-admin/agent/edit
  'agent-edit-title'                 => 'User permissions :agent',
  'agent-edit-table-category'        => 'Category',
  'agent-edit-table-agent'           => 'Agent permission',
  'agent-edit-table-autoassign'      => 'New tickets auto.',
  

// tickets-admin/administrators/____
  'administrator-index-title'                   => 'Administrator Management',  //new
  'btn-create-new-administrator'                => 'Create new administrator',  //new
  'administrator-index-no-administrators'       => 'There are no administrators, ',  //new
  'administrator-index-create-new'              => 'Add administrators',  //new
  'administrator-create-title'                  => 'Add Administrator',  //new
  'administrator-create-add-administrators'     => 'Add Administrators',  //new
  'administrator-create-no-users'               => 'There are no user accounts, create user accounts first.',  //new
  'administrator-create-select-user'            => 'Select user accounts to be added as administrators',  //new

// tickets-admin/category/____
  'category-index-title'          => 'Categories Management',
  'btn-create-new-category'       => 'Create new category',
  'category-index-no-categories'  => 'There are no categories, ',
  'category-index-create-new'     => 'create new category',
  'category-index-js-delete'      => 'Are you sure you want to delete the category: ',
  'category-index-email'          => 'Notifications email',
  'category-index-reasons'        => 'Closing reasons',
  'category-index-tags'           => 'Tags',
  'category-create-title'         => 'Create New Category',
  'category-create-name'          => 'Name',
  'category-create-email'         => 'Notifications email',
  'category-email-origin'         => 'Origin',
  'category-email-origin-website' => 'Website',
  'category-email-origin-tickets' => 'Tickets general email',
  'category-email-origin-category'=> 'This category',
  'category-email-from'           => 'From',
  'category-email-name'           => 'Name',
  'category-email'                => 'E-mail',
  'category-email-reply-to'       => 'Reply to',
  'category-email-default'        => 'Default',
  'category-email-this'           => 'This mailbox',
  'category-email-from-info'      => 'Mail sender used on all notifications in this category',
  'category-email-reply-to-info'  => 'Destination e-mail for notification e-mail replies',
  'category-email-reply-this-info'=> 'The one specified below',
  'category-create-color'         => 'Color',
  'category-create-new-tickets'   => 'New tickets',
  'category-create-new-tickets-help'   => 'Minimum level to create tickets in category',
  'category-edit-title'           => 'Edit Category: :name',
  'category-edit-closing-reasons'      => 'Ticket closing reasons',
  'category-edit-closing-reasons-help' => 'Options that user may choose when closing ticket',
  'category-edit-reason'          => 'Closing reason',
  'category-edit-reason-label'    => 'Reason',
  'category-edit-reason-status'   => 'Status',
  'category-delete-reason'        => 'Delete reason',
  'category-edit-new-tags'        => 'New tags',
  'category-edit-current-tags'    => 'Current tags',
  'category-edit-tag'             => 'Edit tag',
  'category-edit-tag-background'  => 'Background',
  'category-edit-tag-text'        => 'Text',

// tickets-admin/priority/____
  'priority-index-title'          => 'Priorities Management',
  'btn-create-new-priority'       => 'Create new priority',
  'priority-index-no-priorities'  => 'There are no priorities, ',
  'priority-index-create-new'     => 'create new priority',
  'priority-index-js-delete'      => 'Are you sure you want to delete the priority: ',
  'priority-create-title'         => 'Create New Priority',
  'priority-create-name'          => 'Name',
  'priority-create-color'         => 'Color',
  'priority-edit-title'           => 'Edit Priority: :name',

// tickets-admin/status/____
  'status-index-title'            => 'Statuses Management',
  'btn-create-new-status'         => 'Create new status',
  'status-index-no-statuses'      => 'There are no statues,',
  'status-index-create-new'       => 'create new status',
  'status-index-js-delete'        => 'Are you sure you want to delete the status: ',
  'status-create-title'           => 'Create New Status',
  'status-create-name'            => 'Name',
  'status-create-color'           => 'Color',
  'status-edit-title'             => 'Edit Status: :name',
  
// tickets-admin/deptsuser/____
  'deptsuser-index-title'         => 'Departmental users management',
  'btn-create-new-deptsuser'      => 'Assign user',
  'deptsuser-index-empty'         => 'There are no configured relations,',
  'deptsuser-index-definition'    => 'In the create ticket menu, every user will see notices from open tickets from users on this list that are in his own explicit department or related ones',
  'deptsuser-index-user'          => 'User',
  'deptsuser-index-email'         => 'E-mail',
  'deptsuser-index-department'    => 'Department',
  'deptsuser-modal-title-create'   => 'Assign user to department',
  'deptsuser-modal-title-update'   => 'Update departmental user',
  'deptsuser-saved-ok'             => 'Association saved correctly',
  'deptsuser-deleted-ok'           => 'Association deleted',
  'deptsuser-index-js-delete'      => 'Are you sure you want to delete the assignment from user',
  
// tickets-admin/configuration/____
  'config-index-title'            => 'Configuration Settings',
  'config-index-subtitle'         => 'Settings',
  'btn-create-new-config'         => 'Add new setting',
  'config-index-no-settings'      => 'There are no settings,',
  'config-index-initial'          => 'Initial',
  'config-index-tickets'          => 'Tickets',
  'config-index-notifications'    => 'Notifications',
  'config-index-permissions'      => 'Permissions',
  'config-index-editor'           => 'Editor', //Added: 2016.01.14
  'config-index-other'            => 'Other',
  'config-create-title'           => 'Create: New Global Setting',
  'config-create-subtitle'        => 'Create Setting',
  'config-edit-title'             => 'Edit: Global Configuration',
  'config-edit-subtitle'          => 'Edit Setting',
  'config-edit-id'                => 'ID',
  'config-edit-slug'              => 'Slug',
  'config-edit-default'           => 'Default value',
  'config-edit-value'             => 'My value',
  'config-edit-language'          => 'Language',
  'config-edit-unserialize'       => 'Get the array values, and change the values',
  'config-edit-serialize'         => 'Get the serialized string of the changed values (to be entered in the field)',
  'config-edit-should-serialize'  => 'Serialize', //Added: 2016-01-16
  'config-edit-eval-warning'      => 'When checked, the server will run eval()!
  									  Don\'t use this if eval() is disabled on your server or if you don\'t exactly know what you are doing!
  									  Exact code executed:', //Added: 2016-01-16
  'config-edit-reenter-password'  => 'Re-enter your password', //Added: 2016-01-16
  'config-edit-auth-failed'       => 'Password mismatch', //Added: 2016-01-16
  'config-edit-eval-error'        => 'Invalid value', //Added: 2016-01-16
  'config-edit-tools'             => 'Tools:',
  'config-update-confirm'         => 'Configuration :name has been updated',

];
