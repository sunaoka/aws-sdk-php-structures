<?php

namespace Sunaoka\Aws\Structures\MarketplaceEntitlementService\GetEntitlements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $IntegerValue
 * @property double|null $DoubleValue
 * @property bool|null $BooleanValue
 * @property string|null $StringValue
 */
class EntitlementValue extends Shape
{
    /**
     * @param array{
     *     IntegerValue?: int|null,
     *     DoubleValue?: double|null,
     *     BooleanValue?: bool|null,
     *     StringValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
