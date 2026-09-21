<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdateBillingTransferPreference\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string|null $PricingPlanArn
 */
class AutoTransferBillingGroupCreationPreference extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     PricingPlanArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
