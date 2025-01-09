<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListPricingPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $Description
 * @property int $Size
 * @property int $CreationTime
 * @property int $LastModifiedTime
 */
class PricingPlanListElement extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Arn?: string,
     *     Description?: string,
     *     Size?: int,
     *     CreationTime?: int,
     *     LastModifiedTime?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
