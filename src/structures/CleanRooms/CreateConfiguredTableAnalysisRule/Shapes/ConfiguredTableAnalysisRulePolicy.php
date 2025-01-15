<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateConfiguredTableAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfiguredTableAnalysisRulePolicyV1|null $v1
 */
class ConfiguredTableAnalysisRulePolicy extends Shape
{
    /**
     * @param array{v1?: ConfiguredTableAnalysisRulePolicyV1|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
