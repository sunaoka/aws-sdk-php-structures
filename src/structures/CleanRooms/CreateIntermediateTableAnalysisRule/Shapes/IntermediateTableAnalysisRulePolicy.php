<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateIntermediateTableAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IntermediateTableAnalysisRulePolicyV1|null $v1
 */
class IntermediateTableAnalysisRulePolicy extends Shape
{
    /**
     * @param array{v1?: IntermediateTableAnalysisRulePolicyV1|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
