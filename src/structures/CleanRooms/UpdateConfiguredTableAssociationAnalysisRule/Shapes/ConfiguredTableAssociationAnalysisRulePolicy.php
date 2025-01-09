<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTableAssociationAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfiguredTableAssociationAnalysisRulePolicyV1 $v1
 */
class ConfiguredTableAssociationAnalysisRulePolicy extends Shape
{
    /**
     * @param array{v1?: ConfiguredTableAssociationAnalysisRulePolicyV1} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
