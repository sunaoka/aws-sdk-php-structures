<?php

namespace Sunaoka\Aws\Structures\Payments;

class PaymentsClient extends \Aws\Payments\PaymentsClient
{
    use BatchGetFinancialRecord\BatchGetFinancialRecordTrait;
    use GetAccountBalance\GetAccountBalanceTrait;
    use GetFinancialRecord\GetFinancialRecordTrait;
    use GetPaymentInstrument\GetPaymentInstrumentTrait;
    use ListFinancialRecords\ListFinancialRecordsTrait;
    use ListPaymentInstruments\ListPaymentInstrumentsTrait;
}
