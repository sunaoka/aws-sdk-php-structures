<?php

namespace Sunaoka\Aws\Structures\SesV2\GetAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'ESSENTIALS'|'PRO'|'ENTERPRISE'|null $CurrentPlan
 * @property 'NONE'|'ESSENTIALS'|'PRO'|'ENTERPRISE'|null $NextPlan
 */
class PricingAttributes extends Shape
{
    /**
     * @param array{
     *     CurrentPlan?: 'NONE'|'ESSENTIALS'|'PRO'|'ENTERPRISE'|null,
     *     NextPlan?: 'NONE'|'ESSENTIALS'|'PRO'|'ENTERPRISE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
