<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMMON'|'TARGETED' $InspectionLevel
 * @property bool|null $EnableMachineLearning
 */
class AWSManagedRulesBotControlRuleSet extends Shape
{
    /**
     * @param array{
     *     InspectionLevel: 'COMMON'|'TARGETED',
     *     EnableMachineLearning?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
