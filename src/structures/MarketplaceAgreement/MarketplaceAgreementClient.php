<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement;

class MarketplaceAgreementClient extends \Aws\MarketplaceAgreement\MarketplaceAgreementClient
{
    use BatchCreateBillingAdjustmentRequest\BatchCreateBillingAdjustmentRequestTrait;
    use CancelAgreementCancellationRequest\CancelAgreementCancellationRequestTrait;
    use CancelAgreementPaymentRequest\CancelAgreementPaymentRequestTrait;
    use DescribeAgreement\DescribeAgreementTrait;
    use GetAgreementCancellationRequest\GetAgreementCancellationRequestTrait;
    use GetAgreementPaymentRequest\GetAgreementPaymentRequestTrait;
    use GetAgreementTerms\GetAgreementTermsTrait;
    use GetBillingAdjustmentRequest\GetBillingAdjustmentRequestTrait;
    use ListAgreementCancellationRequests\ListAgreementCancellationRequestsTrait;
    use ListAgreementInvoiceLineItems\ListAgreementInvoiceLineItemsTrait;
    use ListAgreementPaymentRequests\ListAgreementPaymentRequestsTrait;
    use ListBillingAdjustmentRequests\ListBillingAdjustmentRequestsTrait;
    use SearchAgreements\SearchAgreementsTrait;
    use SendAgreementCancellationRequest\SendAgreementCancellationRequestTrait;
    use SendAgreementPaymentRequest\SendAgreementPaymentRequestTrait;
}
