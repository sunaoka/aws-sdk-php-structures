<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredTableAssociationAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfiguredTableAssociationAnalysisRulePolicyV1|null $v1
 */
class ConfiguredTableAssociationAnalysisRulePolicy extends Shape
{
    /**
     * @param array{v1?: ConfiguredTableAssociationAnalysisRulePolicyV1|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
