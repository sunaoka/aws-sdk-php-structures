<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeProducts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProductArn
 * @property string $ProductName
 * @property string $CompanyName
 * @property string $Description
 * @property list<string> $Categories
 * @property list<'SEND_FINDINGS_TO_SECURITY_HUB'|'RECEIVE_FINDINGS_FROM_SECURITY_HUB'|'UPDATE_FINDINGS_IN_SECURITY_HUB'> $IntegrationTypes
 * @property string $MarketplaceUrl
 * @property string $ActivationUrl
 * @property string $ProductSubscriptionResourcePolicy
 */
class Product extends Shape
{
    /**
     * @param array{
     *     ProductArn: string,
     *     ProductName?: string,
     *     CompanyName?: string,
     *     Description?: string,
     *     Categories?: list<string>,
     *     IntegrationTypes?: list<'SEND_FINDINGS_TO_SECURITY_HUB'|'RECEIVE_FINDINGS_FROM_SECURITY_HUB'|'UPDATE_FINDINGS_IN_SECURITY_HUB'>,
     *     MarketplaceUrl?: string,
     *     ActivationUrl?: string,
     *     ProductSubscriptionResourcePolicy?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
