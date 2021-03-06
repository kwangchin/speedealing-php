<?php
/* Copyright (C) 2012	Regis Houssin	<regis.houssin@capnetworks.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

$stocks = array(
		'CHARSET' => 'UTF-8',
		'WarehouseCard' => 'Warehouse kort',
		'Warehouse' => 'Warehouse',
		'Warehouses' => 'Warehouses',
		'NewWarehouse' => 'Nytt lager / Lager område',
		'WarehouseEdit' => 'Ändra lager',
		'MenuNewWarehouse' => 'Nya lager',
		'WarehouseOpened' => 'Warehouse öppnade',
		'WarehouseClosed' => 'Lager stängt',
		'WarehouseSource' => 'Källa lager',
		'WarehouseSourceNotDefined' => 'No warehouse defined,',
		'AddOne' => 'Add one',
		'WarehouseTarget' => 'Mål lager',
		'ValidateSending' => 'Radera skicka',
		'CancelSending' => 'Avbryt sändning',
		'DeleteSending' => 'Radera skicka',
		'Stock' => 'Lager',
		'Stocks' => 'Lager',
		'Movement' => 'Movement',
		'Movements' => 'Rörelser',
		'ErrorWarehouseRefRequired' => 'Warehouse hänvisning namn behövs',
		'ErrorWarehouseLabelRequired' => 'Warehouse etikett föreskrivs',
		'CorrectStock' => 'Rätt lager',
		'ListOfWarehouses' => 'Lista över lager',
		'ListOfStockMovements' => 'Lista över lageromsättningen',
		'StocksArea' => 'Lager område',
		'Location' => 'Läge',
		'LocationSummary' => 'Kortnamn plats',
		'NumberOfProducts' => 'Totalt antal produkter',
		'LastMovement' => 'Sista satsen',
		'LastMovements' => 'Senaste rörelser',
		'Units' => 'Enheter',
		'Unit' => 'Enhet',
		'StockCorrection' => 'Rätt lager',
		'StockMovement' => 'Överföring',
		'StockMovements' => 'Stock överföringar',
		'NumberOfUnit' => 'Antal enheter',
		'UnitPurchaseValue' => 'Unit purchase price',
		'TotalStock' => 'Totalt finns i lager',
		'StockTooLow' => 'Lager för låg',
		'StockLowerThanLimit' => 'Stock lower than alert limit',
		'EnhancedValue' => 'Värde',
		'PMPValue' => 'Vägda genomsnittliga priset',
		'PMPValueShort' => 'WAP',
		'EnhancedValueOfWarehouses' => 'Lager värde',
		'UserWarehouseAutoCreate' => 'Skapa ett lager automatiskt när du skapar en användare',
		'QtyDispatched' => 'Kvantitet sänds',
		'OrderDispatch' => 'Stock avsändning',
		'RuleForStockManagementDecrease' => 'Regel för lagerhantering minska',
		'RuleForStockManagementIncrease' => 'Regel för lagerhantering öka',
		'DeStockOnBill' => 'Minska riktiga lager kunder fakturor / kreditnotor validering',
		'DeStockOnValidateOrder' => 'Minska riktiga lager på kunder order validering',
		'DeStockOnShipment' => 'Minska riktiga lager på transporten validering',
		'ReStockOnBill' => 'Reell ökning av lager på leverantörer fakturor / kreditnotor validering',
		'ReStockOnValidateOrder' => 'Reell ökning av lagren av leverantörer order gillande',
		'ReStockOnDispatchOrder' => 'Reell ökning av lagren på manuell distributionscentraler i lager, efter leverantör för mottagande',
		'OrderStatusNotReadyToDispatch' => 'Beställ ännu inte eller inte mer en ställning som innebär sändningar av produkter i lager lager.',
		'StockDiffPhysicTeoric' => 'Orsak till skillnad lager fysiska och teoretiska',
		'NoPredefinedProductToDispatch' => 'Inga fördefinierade produkter för det här objektet. Så ingen distributionscentraler i lager krävs.',
		'DispatchVerb' => 'Dispatch',
		'StockLimitShort' => 'Gräns',
		'StockLimit' => 'Lager gräns för aviseringar',
		'PhysicalStock' => 'Fysisk lager',
		'RealStock' => 'Real Stock',
		'TheoreticalStock' => 'Therocial lager',
		'VirtualStock' => 'Virtuellt lager',
		'MininumStock' => 'Minimilager',
		'StockUp' => 'Bygg upp',
		'MininumStockShort' => 'Stock min',
		'StockUpShort' => 'Bygg upp',
		'IdWarehouse' => 'Id lager',
		'DescWareHouse' => 'Beskrivning lager',
		'LieuWareHouse' => 'Lokalisering lager',
		'WarehousesAndProducts' => 'Lager och produkter',
		'AverageUnitPricePMPShort' => 'Vägt genomsnittligt ingång pris',
		'AverageUnitPricePMP' => 'Vägt genomsnittligt ingång pris',
		'SellPriceMin' => 'Sälja Enhetspris',
		'EstimatedStockValueSellShort' => 'Värde att sälja',
		'EstimatedStockValueSell' => 'Värde att sälja',
		'EstimatedStockValueShort' => 'Uppskattat värde av lager',
		'EstimatedStockValue' => 'Uppskattat värde av lager',
		'DeleteAWarehouse' => 'Ta bort ett lager',
		'ConfirmDeleteWarehouse' => 'Är du säker på att du vill ta bort lagret <b>%s?</b>',
		'PersonalStock' => 'Personlig lager %s',
		'ThisWarehouseIsPersonalStock' => 'Detta lager representerar personliga beståndet av %s %s',
		'SelectWarehouseForStockDecrease' => 'Välj lagret som ska användas för beståndet minskar',
		'SelectWarehouseForStockIncrease' => 'Välj lagret som ska användas för lagerökningen',
		'LastWaitingSupplierOrders' => 'Orders waiting for receptions'
);
?>