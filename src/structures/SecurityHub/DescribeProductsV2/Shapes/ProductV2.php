<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeProductsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProductV2Name
 * @property string|null $CompanyName
 * @property string|null $Description
 * @property list<string>|null $Categories
 * @property list<'SEND_FINDINGS_TO_SECURITY_HUB'|'RECEIVE_FINDINGS_FROM_SECURITY_HUB'|'UPDATE_FINDINGS_IN_SECURITY_HUB'>|null $IntegrationV2Types
 * @property string|null $MarketplaceUrl
 * @property string|null $ActivationUrl
 */
class ProductV2 extends Shape
{
    /**
     * @param array{
     *     ProductV2Name?: string|null,
     *     CompanyName?: string|null,
     *     Description?: string|null,
     *     Categories?: list<string>|null,
     *     IntegrationV2Types?: list<'SEND_FINDINGS_TO_SECURITY_HUB'|'RECEIVE_FINDINGS_FROM_SECURITY_HUB'|'UPDATE_FINDINGS_IN_SECURITY_HUB'>|null,
     *     MarketplaceUrl?: string|null,
     *     ActivationUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
