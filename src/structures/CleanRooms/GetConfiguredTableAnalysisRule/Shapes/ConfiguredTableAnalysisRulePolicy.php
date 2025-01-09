<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredTableAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfiguredTableAnalysisRulePolicyV1 $v1
 */
class ConfiguredTableAnalysisRulePolicy extends Shape
{
    /**
     * @param array{v1?: ConfiguredTableAnalysisRulePolicyV1} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
