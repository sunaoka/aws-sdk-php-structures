<?php

namespace Sunaoka\Aws\Structures\MarketplaceEntitlementService\GetEntitlements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProductCode
 * @property string $Dimension
 * @property string $CustomerIdentifier
 * @property EntitlementValue $Value
 * @property \Aws\Api\DateTimeResult $ExpirationDate
 */
class Entitlement extends Shape
{
    /**
     * @param array{
     *     ProductCode?: string,
     *     Dimension?: string,
     *     CustomerIdentifier?: string,
     *     Value?: EntitlementValue,
     *     ExpirationDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
