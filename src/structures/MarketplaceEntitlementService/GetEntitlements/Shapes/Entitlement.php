<?php

namespace Sunaoka\Aws\Structures\MarketplaceEntitlementService\GetEntitlements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProductCode
 * @property string|null $Dimension
 * @property string|null $CustomerIdentifier
 * @property string|null $CustomerAWSAccountId
 * @property EntitlementValue|null $Value
 * @property \Aws\Api\DateTimeResult|null $ExpirationDate
 * @property string|null $LicenseArn
 */
class Entitlement extends Shape
{
    /**
     * @param array{
     *     ProductCode?: string|null,
     *     Dimension?: string|null,
     *     CustomerIdentifier?: string|null,
     *     CustomerAWSAccountId?: string|null,
     *     Value?: EntitlementValue|null,
     *     ExpirationDate?: \Aws\Api\DateTimeResult|null,
     *     LicenseArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
