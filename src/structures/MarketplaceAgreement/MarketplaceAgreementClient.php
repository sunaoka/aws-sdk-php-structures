<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement;

class MarketplaceAgreementClient extends \Aws\MarketplaceAgreement\MarketplaceAgreementClient
{
    use DescribeAgreement\DescribeAgreementTrait;
    use GetAgreementTerms\GetAgreementTermsTrait;
    use SearchAgreements\SearchAgreementsTrait;
}
