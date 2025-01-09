<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdatePricingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Activated
 */
class UpdateFreeTierConfig extends Shape
{
    /**
     * @param array{Activated: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
