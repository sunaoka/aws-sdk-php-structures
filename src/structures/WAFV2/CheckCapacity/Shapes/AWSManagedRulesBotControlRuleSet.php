<?php

namespace Sunaoka\Aws\Structures\WAFV2\CheckCapacity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMMON'|'TARGETED' $InspectionLevel
 * @property bool $EnableMachineLearning
 */
class AWSManagedRulesBotControlRuleSet extends Shape
{
    /**
     * @param array{
     *     InspectionLevel: 'COMMON'|'TARGETED',
     *     EnableMachineLearning?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
