<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement;

class MarketplaceAgreementClient extends \Aws\MarketplaceAgreement\MarketplaceAgreementClient
{
    use CancelAgreementPaymentRequest\CancelAgreementPaymentRequestTrait;
    use DescribeAgreement\DescribeAgreementTrait;
    use GetAgreementPaymentRequest\GetAgreementPaymentRequestTrait;
    use GetAgreementTerms\GetAgreementTermsTrait;
    use ListAgreementPaymentRequests\ListAgreementPaymentRequestsTrait;
    use SearchAgreements\SearchAgreementsTrait;
    use SendAgreementPaymentRequest\SendAgreementPaymentRequestTrait;
}
