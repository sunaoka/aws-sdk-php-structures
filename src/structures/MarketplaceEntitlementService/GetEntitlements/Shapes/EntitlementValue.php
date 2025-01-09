<?php

namespace Sunaoka\Aws\Structures\MarketplaceEntitlementService\GetEntitlements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $IntegerValue
 * @property double $DoubleValue
 * @property bool $BooleanValue
 * @property string $StringValue
 */
class EntitlementValue extends Shape
{
    /**
     * @param array{
     *     IntegerValue?: int,
     *     DoubleValue?: double,
     *     BooleanValue?: bool,
     *     StringValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
