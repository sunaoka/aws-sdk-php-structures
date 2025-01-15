<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListPricingPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Arn
 * @property string|null $Description
 * @property int<1, max>|null $Size
 * @property int|null $CreationTime
 * @property int|null $LastModifiedTime
 */
class PricingPlanListElement extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Arn?: string|null,
     *     Description?: string|null,
     *     Size?: int<1, max>|null,
     *     CreationTime?: int|null,
     *     LastModifiedTime?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
