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

$banks = array(
		'CHARSET' => 'UTF-8',
		'Bank' => '银行',
		'Banks' => '银行',
		'MenuBankCash' => '银行/现金',
		'MenuSetupBank' => '银行/现金体制',
		'BankName' => '银行名称',
		'FinancialAccount' => '帐户',
		'FinancialAccounts' => '帐目',
		'BankAccount' => '银行帐户',
		'BankAccounts' => '银行帐户',
		'AccountRef' => '金融帐号',
		'AccountLabel' => '金融帐户标签',
		'CashAccount' => '现金帐户',
		'CashAccounts' => '现金帐户',
		'MainAccount' => '主要帐户',
		'CurrentAccount' => '经常帐',
		'CurrentAccounts' => '往来帐户',
		'SavingAccount' => '储蓄账户',
		'SavingAccounts' => '储蓄帐户',
		'ErrorBankLabelAlreadyExists' => '金融帐户标签已存在',
		'BankBalance' => '平衡',
		'BalanceMinimalAllowed' => '允许的最小平衡',
		'BalanceMinimalDesired' => '最低所需的平衡',
		'InitialBankBalance' => '初步平衡',
		'EndBankBalance' => '年末余额',
		'CurrentBalance' => '当前余额',
		'FutureBalance' => '未来的平衡',
		'ShowAllTimeBalance' => '显示余额开始',
		'Reconciliation' => '和解',
		'RIB' => '银行帐号',
		'IBAN' => 'IBAN号码',
		'BIC' => '的BIC / SWIFT的号码',
		'StandingOrders' => '常年订单',
		'StandingOrder' => '长期订单',
		'Withdrawals' => '提款',
		'Withdrawal' => '提款',
		'AccountStatement' => '户口结单',
		'AccountStatementShort' => '声明',
		'AccountStatements' => '户口结单',
		'LastAccountStatements' => '最近帐户报表',
		'Rapprochement' => 'Reconciliate',
		'IOMonthlyReporting' => '每月报告',
		'BankAccountDomiciliation' => '帐户地址',
		'BankAccountCountry' => '到国家',
		'BankAccountOwner' => '帐户持有人姓名',
		'BankAccountOwnerAddress' => '帐户持有人地址',
		'RIBControlError' => '值的完整性检查失败。这意味着此帐号的信息不完整或错误（检查国家，数字和IBAN）。',
		'CreateAccount' => '创建帐户',
		'NewAccount' => '新帐户',
		'NewBankAccount' => '新的银行帐户',
		'NewFinancialAccount' => '新的金融帐',
		'MenuNewFinancialAccount' => '新的金融帐',
		'NewCurrentAccount' => '新的经常帐',
		'NewSavingAccount' => '新的储蓄帐户',
		'NewCashAccount' => '新的现金帐户',
		'EditFinancialAccount' => '编辑帐户',
		'AccountSetup' => '财务账户设置',
		'SearchBankMovement' => '查阅银行的运动',
		'Debts' => '债务',
		'LabelBankCashAccount' => '银行或现金标签',
		'AccountType' => '账户类型',
		'BankType0' => '储蓄账户',
		'BankType1' => '经常帐',
		'BankType2' => '现金帐户',
		'IfBankAccount' => '如果银行账户',
		'AccountsArea' => '面积占',
		'AccountCard' => '户口卡',
		'DeleteAccount' => '删除帐户',
		'ConfirmDeleteAccount' => '你确定要删除此帐户吗？',
		'Account' => '帐户',
		'ByCategories' => '按类别',
		'ByRubriques' => '按类别',
		'BankTransactionByCategories' => '按类别银行交易',
		'BankTransactionForCategory' => '类别<b>％，</b>银行交易<b>的</b> S',
		'RemoveFromRubrique' => '删除连接类',
		'RemoveFromRubriqueConfirm' => '你确定要删除之间的交易和类别的联系？',
		'ListBankTransactions' => '银行交易清单',
		'IdTransaction' => '事务ID',
		'BankTransactions' => '银行交易',
		'SearchTransaction' => '搜索交易',
		'ListTransactions' => '交易清单',
		'ListTransactionsByCategory' => '交易清单/类别',
		'TransactionsToConciliate' => '交易调和',
		'Conciliable' => '可以两全',
		'Conciliate' => '调和',
		'Conciliation' => '和解',
		'ConciliationForAccount' => '此帐户核对',
		'IncludeClosedAccount' => '包括关闭账户',
		'OnlyOpenedAccount' => '只有开立帐户',
		'AccountToCredit' => '帐户信用',
		'AccountToDebit' => '帐户转帐',
		'DisableConciliation' => '此帐户的禁用和解功能',
		'ConciliationDisabled' => '和解功能禁用',
		'StatusAccountOpened' => '开业',
		'StatusAccountClosed' => '关闭',
		'AccountIdShort' => '数',
		'EditBankRecord' => '编辑记录',
		'LineRecord' => '交易',
		'AddBankRecord' => '新增交易',
		'AddBankRecordLong' => '新增手动交易',
		'ConciliatedBy' => '由调和',
		'DateConciliating' => '核对日期',
		'BankLineConciliated' => '交易和解',
		'CustomerInvoicePayment' => '客户付款',
		'SupplierInvoicePayment' => '供应商付款',
		'WithdrawalPayment' => '提款支付',
		'SocialContributionPayment' => '社会贡献付款',
		'FinancialAccountJournal' => '金融帐日记',
		'BankTransfer' => '银行汇款',
		'BankTransfers' => '银行转帐',
		'TransferDesc' => '从一个帐户转移到另一个，Dolibarr会写两个记录（相同数额的源帐户借记卡和信用卡帐户中的目标。同样的标签和日期将在此交易中使用）',
		'TransferFrom' => '从',
		'TransferTo' => '至',
		'TransferFromToDone' => '一个<b>％</b>转让<b>从</b> s到<b>％s</b>的<b>％s％s</b>已被记录。',
		'CheckTransmitter' => '发射机',
		'ValidateCheckReceipt' => '验证这张支票收据吗？',
		'ConfirmValidateCheckReceipt' => '你确定要验证这个检查后，没有变化将有可能再次做到这一点？',
		'DeleteCheckReceipt' => '删除这张支票收据吗？',
		'ConfirmDeleteCheckReceipt' => '你确定要删除这张支票收据吗？',
		'BankChecks' => '银行支票',
		'BankChecksToReceipt' => '等待支票存款',
		'ShowCheckReceipt' => '显示检查存单',
		'NumberOfCheques' => '铌检查',
		'DeleteTransaction' => '删除交易',
		'ConfirmDeleteTransaction' => '你确定要删除这个交易？',
		'ThisWillAlsoDeleteBankRecord' => '这也将删除生成的银行交易',
		'BankMovements' => '运动',
		'CashBudget' => '现金预算',
		'PlannedTransactions' => '计划进行的交易',
		'Graph' => '图像',
		'ExportDataset_banque_1' => '银行交易和帐户的声明',
		'TransactionOnTheOtherAccount' => '交易的其他帐户',
		'TransactionWithOtherAccount' => '转帐',
		'PaymentNumberUpdateSucceeded' => '缴费人数的最新成功',
		'PaymentNumberUpdateFailed' => '付款数目无法更新',
		'PaymentDateUpdateSucceeded' => '付款日期更新成功',
		'PaymentDateUpdateFailed' => '付款日期可能无法更新',
		'Transactions' => 'Transactions',
		'BankTransactionLine' => '银行交易',
		'AllAccounts' => '所有银行/现金帐户',
		'BackToAccount' => '回到帐户',
		'ShowAllAccounts' => '显示所有帐户',
		'FutureTransaction' => '在FUTUR的交易。调解没有办法。',
		'SelectChequeTransactionAndGenerate' => '选择/过滤器检查纳入支票存款收据，并单击“创建”。',
		'InputReceiptNumber' => 'Choose the bank statement related with the conciliation. Use a sortable numeric value (such as, YYYYMM)',
		'EventualyAddCategory' => 'Eventually, specify a category in which to classify the records',
		'ToConciliate' => 'To conciliate?',
		'ThenCheckLinesAndConciliate' => 'Then, check the lines present in the bank statement and click'
);
?>