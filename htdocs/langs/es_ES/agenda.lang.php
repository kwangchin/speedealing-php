<?php
/* Copyright (C) 2012	Regis Houssin	<regis.houssin@capnetworks.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

$agenda = array(
		'CHARSET' => 'UTF-8',
		'Actions' => 'Eventos',
		'ActionsArea' => 'Área de eventos (acciones y tareas)',
		'Agenda' => 'Agenda',
		'Agendas' => 'Agendas',
		'Calendar' => 'Calendario',
		'Calendars' => 'Calendarios',
		'LocalAgenda' => 'Calendario local',
		'AffectedTo' => 'Asignada a',
		'DoneBy' => 'Realizado por',
		'Events' => 'Eventos',
		'MyEvents' => 'Mis eventos',
		'OtherEvents' => 'Otros eventos',
		'ListOfActions' => 'Listado de eventos',
		'Location' => 'Localización',
		'EventOnFullDay' => 'Evento para todo el día',
		'SearchAnAction' => 'Buscar un evento/tarea',
		'MenuToDoActions' => 'Eventos incompletos',
		'MenuDoneActions' => 'Eventos terminados',
		'MenuToDoMyActions' => 'Mis eventos incompletos',
		'MenuDoneMyActions' => 'Mis eventos terminados',
		'ListOfEvents' => 'Listado de eventos Dolibarr',
		'ActionsAskedBy' => 'Eventos registrados por',
		'ActionsToDoBy' => 'Eventos asignados a',
		'ActionsDoneBy' => 'Eventos realizados por',
		'AllMyActions' => 'Todos mis eventos/tareas',
		'AllActions' => 'Todos los eventos/tareas',
		'ViewList' => 'Vista listado',
		'ViewCal' => 'Vista mensual',
		'ViewDay' => 'Vista diaria',
		'ViewWeek' => 'Vista semanal',
		'ViewWithPredefinedFilters' => 'Ver con los filtros predefinidos',
		'AutoActions' => 'Inclusión automática en la agenda',
		'AgendaAutoActionDesc' => 'Indique en esta pestaña los eventos para los que desea que Dolibarr cree automáticamente una acción en la agenda. Si no se marca ningún caso (por defecto),  solamente las acciones manuales se incluirán en la agenda.',
		'AgendaSetupOtherDesc' => 'Esta página le permite configurar algunas opciones que permiten exportar una vista de su agenda Dolibar a un calendario externo (thunderbird, google calendar, ...)',
		'AgendaExtSitesDesc' => 'Esta página le permite configurar calendarios externos para su visualización en la agenda de Dolibarr.',
		'ActionsEvents' => 'Eventos para que Dolibarr cree una acción de forma automática',
		'PropalValidatedInDolibarr' => 'Presupuesto %s validado',
		'InvoiceValidatedInDolibarr' => 'Factura %s validada',
		'InvoiceBackToDraftInDolibarr' => 'Factura %s devuelta a borrador',
		'OrderValidatedInDolibarr' => 'Pedido %s validado',
		'OrderApprovedInDolibarr' => 'Pedido %s aprobado',
		'OrderBackToDraftInDolibarr' => 'Pedido %s devuelto a borrador',
		'OrderCanceledInDolibarr' => 'Pedido %s anulado',
		'InterventionValidatedInDolibarr' => 'Intervención %s validada',
		'ProposalSentByEMail' => 'Presupuesto %s enviado por e-mail',
		'OrderSentByEMail' => 'Pedido de cliente %s enviado por e-mail',
		'InvoiceSentByEMail' => 'Factura a cliente %s enviada por e-mail',
		'SupplierOrderSentByEMail' => 'Pedido a proveedor %s enviada por e-mail',
		'SupplierInvoiceSentByEMail' => 'Factura de proveedor %s enviada por e-mail',
		'ShippingSentByEMail' => 'Expedición %s enviada por e-mail',
		'InterventionSentByEMail' => 'Intervención %s enviada por e-mail',
		'NewCompanyToDolibarr' => 'Tercero creado',
		'DateActionPlannedStart' => 'Fecha de inicio prevista',
		'DateActionPlannedEnd' => 'Fecha de fin prevista',
		'DateActionDoneStart' => 'Fecha real de inicio',
		'DateActionDoneEnd' => 'Fecha real de finalización',
		'DateActionStart' => 'Fecha de inicio',
		'DateActionEnd' => 'Fecha finalización',
		'AgendaUrlOptions1' => 'Puede también añadir estos parámetros al filtro de salida:',
		'AgendaUrlOptions2' => '<b>login=%s</b> para restringir inserciones a acciones creadas , que afecten o realizadas por el usuario <b>%s</b>.',
		'AgendaUrlOptions3' => '<b>logina=%s</b> para restringir inserciones a acciones creadas por el usuario <b>%s</b>.',
		'AgendaUrlOptions4' => '<b>logint=%s</b> para restringir inserciones a acciones que afecten al usuario <b>%s</b>.',
		'AgendaUrlOptions5' => '<b>logind=%s</b> para restringir inserciones a acciones realizadas por el usuario <b>%s</b>.',
		'AgendaShowBirthdayEvents' => 'Mostrar cumpleaños de los contactos',
		'AgendaHideBirthdayEvents' => 'Ocultar cumpleaños de los contactos',
		'Event' => 'Événement',
		'Activities' => 'Tâches/activités',
		'NewActions' => 'Nouvelles<br>actions',
		'DoActions' => 'Actions<br>en cours',
		'SumMyActions' => 'Actions réalisées<br>par moi cette année',
		'SumActions' => 'Actions au total<br>cette année',
		'DateEchAction' => 'Date d\'échéance',
		'StatusActionTooLate' => 'Action en retard',
		'MyTasks' => 'Mes tâches',
		'MyDelegatedTasks' => 'Mes tâches déléguées',
		'ProdPlanning' => 'Planning de production',
		// External Sites ical
		'ExportCal' => 'Exportar calendario',
		'ExtSites' => 'Calendarios externos',
		'ExtSitesEnableThisTool' => 'Mostrar calendarios externos en la agenda',
		'ExtSitesNbOfAgenda' => 'Número de calendarios',
		'AgendaExtNb' => 'Calendario nº %s',
		'ExtSiteUrlAgenda' => 'Url de acceso al archivo .ical',
		'ExtSiteNoLabel' => 'Sin descripción'
);
?>