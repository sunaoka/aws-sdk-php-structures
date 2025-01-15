<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetSchemaAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnalysisRulePolicyV1|null $v1
 */
class AnalysisRulePolicy extends Shape
{
    /**
     * @param array{v1?: AnalysisRulePolicyV1|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
