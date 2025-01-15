<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeProducts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProductArn
 * @property string|null $ProductName
 * @property string|null $CompanyName
 * @property string|null $Description
 * @property list<string>|null $Categories
 * @property list<'SEND_FINDINGS_TO_SECURITY_HUB'|'RECEIVE_FINDINGS_FROM_SECURITY_HUB'|'UPDATE_FINDINGS_IN_SECURITY_HUB'>|null $IntegrationTypes
 * @property string|null $MarketplaceUrl
 * @property string|null $ActivationUrl
 * @property string|null $ProductSubscriptionResourcePolicy
 */
class Product extends Shape
{
    /**
     * @param array{
     *     ProductArn: string,
     *     ProductName?: string|null,
     *     CompanyName?: string|null,
     *     Description?: string|null,
     *     Categories?: list<string>|null,
     *     IntegrationTypes?: list<'SEND_FINDINGS_TO_SECURITY_HUB'|'RECEIVE_FINDINGS_FROM_SECURITY_HUB'|'UPDATE_FINDINGS_IN_SECURITY_HUB'>|null,
     *     MarketplaceUrl?: string|null,
     *     ActivationUrl?: string|null,
     *     ProductSubscriptionResourcePolicy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
