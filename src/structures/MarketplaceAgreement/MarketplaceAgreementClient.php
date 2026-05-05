<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement;

class MarketplaceAgreementClient extends \Aws\MarketplaceAgreement\MarketplaceAgreementClient
{
    use AcceptAgreementCancellationRequest\AcceptAgreementCancellationRequestTrait;
    use AcceptAgreementPaymentRequest\AcceptAgreementPaymentRequestTrait;
    use AcceptAgreementRequest\AcceptAgreementRequestTrait;
    use BatchCreateBillingAdjustmentRequest\BatchCreateBillingAdjustmentRequestTrait;
    use CancelAgreement\CancelAgreementTrait;
    use CancelAgreementCancellationRequest\CancelAgreementCancellationRequestTrait;
    use CancelAgreementPaymentRequest\CancelAgreementPaymentRequestTrait;
    use CreateAgreementRequest\CreateAgreementRequestTrait;
    use DescribeAgreement\DescribeAgreementTrait;
    use GetAgreementCancellationRequest\GetAgreementCancellationRequestTrait;
    use GetAgreementEntitlements\GetAgreementEntitlementsTrait;
    use GetAgreementPaymentRequest\GetAgreementPaymentRequestTrait;
    use GetAgreementTerms\GetAgreementTermsTrait;
    use GetBillingAdjustmentRequest\GetBillingAdjustmentRequestTrait;
    use ListAgreementCancellationRequests\ListAgreementCancellationRequestsTrait;
    use ListAgreementCharges\ListAgreementChargesTrait;
    use ListAgreementInvoiceLineItems\ListAgreementInvoiceLineItemsTrait;
    use ListAgreementPaymentRequests\ListAgreementPaymentRequestsTrait;
    use ListBillingAdjustmentRequests\ListBillingAdjustmentRequestsTrait;
    use RejectAgreementCancellationRequest\RejectAgreementCancellationRequestTrait;
    use RejectAgreementPaymentRequest\RejectAgreementPaymentRequestTrait;
    use SearchAgreements\SearchAgreementsTrait;
    use SendAgreementCancellationRequest\SendAgreementCancellationRequestTrait;
    use SendAgreementPaymentRequest\SendAgreementPaymentRequestTrait;
    use UpdatePurchaseOrders\UpdatePurchaseOrdersTrait;
}
