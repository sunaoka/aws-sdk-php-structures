<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetIntermediateTableAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IntermediateTableAnalysisRuleCustom|null $custom
 */
class IntermediateTableAnalysisRulePolicyV1 extends Shape
{
    /**
     * @param array{custom?: IntermediateTableAnalysisRuleCustom|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
