<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement;

class MarketplaceAgreementClient extends \Aws\MarketplaceAgreement\MarketplaceAgreementClient
{
    use AcceptAgreementApproval\AcceptAgreementApprovalTrait;
    use AcceptAgreementCancellationRequest\AcceptAgreementCancellationRequestTrait;
    use AcceptAgreementPaymentRequest\AcceptAgreementPaymentRequestTrait;
    use AcceptAgreementRequest\AcceptAgreementRequestTrait;
    use BatchCreateBillingAdjustmentRequest\BatchCreateBillingAdjustmentRequestTrait;
    use CancelAgreement\CancelAgreementTrait;
    use CancelAgreementCancellationRequest\CancelAgreementCancellationRequestTrait;
    use CancelAgreementPaymentRequest\CancelAgreementPaymentRequestTrait;
    use CancelAgreementRequest\CancelAgreementRequestTrait;
    use CreateAgreementRequest\CreateAgreementRequestTrait;
    use DescribeAgreement\DescribeAgreementTrait;
    use GetAgreementApproval\GetAgreementApprovalTrait;
    use GetAgreementCancellationRequest\GetAgreementCancellationRequestTrait;
    use GetAgreementContacts\GetAgreementContactsTrait;
    use GetAgreementEntitlements\GetAgreementEntitlementsTrait;
    use GetAgreementPaymentRequest\GetAgreementPaymentRequestTrait;
    use GetAgreementRequest\GetAgreementRequestTrait;
    use GetAgreementRequestApprovalPlans\GetAgreementRequestApprovalPlansTrait;
    use GetAgreementRequestTerms\GetAgreementRequestTermsTrait;
    use GetAgreementTerms\GetAgreementTermsTrait;
    use GetBillingAdjustmentRequest\GetBillingAdjustmentRequestTrait;
    use ListAgreementApprovals\ListAgreementApprovalsTrait;
    use ListAgreementCancellationRequests\ListAgreementCancellationRequestsTrait;
    use ListAgreementCharges\ListAgreementChargesTrait;
    use ListAgreementInvoiceLineItems\ListAgreementInvoiceLineItemsTrait;
    use ListAgreementPaymentRequests\ListAgreementPaymentRequestsTrait;
    use ListAgreementRequests\ListAgreementRequestsTrait;
    use ListBillingAdjustmentRequests\ListBillingAdjustmentRequestsTrait;
    use RejectAgreementApproval\RejectAgreementApprovalTrait;
    use RejectAgreementCancellationRequest\RejectAgreementCancellationRequestTrait;
    use RejectAgreementPaymentRequest\RejectAgreementPaymentRequestTrait;
    use SearchAgreements\SearchAgreementsTrait;
    use SendAgreementCancellationRequest\SendAgreementCancellationRequestTrait;
    use SendAgreementPaymentRequest\SendAgreementPaymentRequestTrait;
    use StartAgreementApprovals\StartAgreementApprovalsTrait;
    use UpdatePurchaseOrders\UpdatePurchaseOrdersTrait;
}
