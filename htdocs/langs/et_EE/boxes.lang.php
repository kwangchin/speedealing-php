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

$boxes = array(
		'CHARSET' => 'UTF-8',
		'BoxLastRssInfos' => 'RSS info',
		'BoxLastProducts' => 'Last %s toodete / teenuste',
		'BoxProductsAlertStock' => 'Products in stock alert',
		'BoxLastProductsInContract' => 'Last %s tellitud tooteid / teenuseid',
		'BoxLastSupplierBills' => 'Last tarnija arved',
		'BoxLastCustomerBills' => 'Last kliendi arved',
		'BoxOldestUnpaidCustomerBills' => 'Vanemad tasumata kliendi arved',
		'BoxOldestUnpaidSupplierBills' => 'Vanemad tasumata tarnija arved',
		'BoxLastProposals' => 'Last äri ettepanekud',
		'BoxLastProspects' => 'Viimati muudetud väljavaateid',
		'BoxLastCustomers' => 'Viimati muudetud klientidele',
		'BoxLastSuppliers' => 'Viimati muudetud tarnijate',
		'BoxLastCustomerOrders' => 'Last klientide tellimused',
		'BoxLastBooks' => 'Viimased raamatud',
		'BoxLastActions' => 'Viimased tegevused',
		'BoxLastContracts' => 'Viimased lepingud',
		'BoxLastContacts' => 'Last kontaktid / aadressid',
		'BoxLastMembers' => 'Last liikmed',
		'BoxCurrentAccounts' => 'Arvelduskontode saldo',
		'BoxSalesTurnover' => 'Müügikäive',
		'BoxTotalUnpaidCustomerBills' => 'Kokku tasumata kliendi arved',
		'BoxTotalUnpaidSuppliersBills' => 'Kokku tasumata tarnija arved',
		'BoxTitleLastBooks' => 'Last %s salvestatud raamatuid',
		'BoxTitleNbOfCustomers' => 'Klientide arv',
		'BoxTitleLastRssInfos' => 'Last %s uudiseid %s',
		'BoxTitleLastProducts' => 'Last %s muundatud toodete / teenuste',
		'BoxTitleProductsAlertStock' => 'Products in stock alert',
		'BoxTitleLastCustomerOrders' => 'Last %s muuta klientide tellimused',
		'BoxTitleLastSuppliers' => 'Last %s registreerida tarnijate',
		'BoxTitleLastCustomers' => 'Last %s registreerida klientide',
		'BoxTitleLastModifiedSuppliers' => 'Last %s muutmine tarnijate',
		'BoxTitleLastModifiedCustomers' => 'Last %s modifitseeritud kliendid',
		'BoxTitleLastCustomersOrProspects' => 'Last %s muuta klientide või väljavaateid',
		'BoxTitleLastPropals' => 'Last %s salvestatud ettepanekuid',
		'BoxTitleLastCustomerBills' => 'Last %s kliendi arved',
		'BoxTitleLastSupplierBills' => 'Last %s tarnija arved',
		'BoxTitleLastProspects' => 'Last %s salvestatud väljavaated',
		'BoxTitleLastModifiedProspects' => 'Last %s muutmine väljavaateid',
		'BoxTitleLastProductsInContract' => 'Last %s toodete / teenuste leping',
		'BoxTitleLastModifiedMembers' => 'Last %s muutmine liikmed',
		'BoxTitleOldestUnpaidCustomerBills' => 'Vanemad %s tasumata kliendi arved',
		'BoxTitleOldestUnpaidSupplierBills' => 'Vanemad %s tasumata tarnija arved',
		'BoxTitleCurrentAccounts' => 'Praegune konto saldode',
		'BoxTitleSalesTurnover' => 'Müügikäive',
		'BoxTitleTotalUnpaidCustomerBills' => 'Tasumata kliendi arved',
		'BoxTitleTotalUnpaidSuppliersBills' => 'Tasumata tarnija arved',
		'BoxTitleLastModifiedContacts' => 'Last %s muutmine kontaktid / aadressid',
		'BoxMyLastBookmarks' => 'Minu viimane %s järjehoidjad',
		'BoxOldestExpiredServices' => 'Vanemad aktiivne aegunud teenused',
		'BoxLastExpiredServices' => 'Last %s vanim kontaktid aktiivne aegunud teenused',
		'BoxTitleLastActionsToDo' => 'Last %s meetmeid teha',
		'BoxTitleLastContracts' => 'Last %s lepingud',
		'BoxTitleLastModifiedDonations' => 'Last %s muutmine annetusi',
		'BoxTitleLastModifiedExpenses' => 'Last %s muutmine kulud',
		'BoxGlobalActivity' => 'Global activity (invoices, proposals, orders)',
		'FailedToRefreshDataInfoNotUpToDate' => 'Suutnud refresh RSS voog. Last eduka refresh kuupäev: %s',
		'LastRefreshDate' => 'Last refresh kuupäev',
		'NoRecordedBookmarks' => 'Ei järjehoidjaid määratletud.',
		'ClickToAdd' => 'Vajuta siia lisada.',
		'NoRecordedCustomers' => 'Ei salvestatud klientidele',
		'NoRecordedContacts' => 'Ei salvestatud kontaktide',
		'NoActionsToDo' => 'Ei tegevusi teha',
		'NoRecordedOrders' => 'Ei salvestatud kliendi korralduste',
		'NoRecordedProposals' => 'Ei salvestatud ettepanekuid',
		'NoRecordedInvoices' => 'Ei salvestatud kliendi arved',
		'NoUnpaidCustomerBills' => 'Ei tasumata kliendi arved',
		'NoRecordedSupplierInvoices' => 'Ei salvestatud tarnija arved',
		'NoUnpaidSupplierBills' => 'Ei tasumata tarnija arved',
		'NoModifiedSupplierBills' => 'Ei salvestatud tarnija arved',
		'NoRecordedProducts' => 'Ei salvestatud toodete / teenuste',
		'NoRecordedProspects' => 'Ei salvestatud väljavaated',
		'NoContractedProducts' => 'Ei ole tooteid / teenuseid tellitakse',
		'NoRecordedContracts' => 'Ei salvestatud lepingud',
		// Latest supplier orders
		'BoxLatestSupplierOrders' => 'Latest supplier orders',
		'BoxTitleLatestSupplierOrders' => '%s latest supplier orders',
		'NoSupplierOrder' => 'No recorded supplier order'
);
?>