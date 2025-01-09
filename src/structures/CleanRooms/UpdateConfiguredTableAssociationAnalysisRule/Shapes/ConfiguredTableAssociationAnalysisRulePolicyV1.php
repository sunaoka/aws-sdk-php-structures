<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTableAssociationAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfiguredTableAssociationAnalysisRuleList $list
 * @property ConfiguredTableAssociationAnalysisRuleAggregation $aggregation
 * @property ConfiguredTableAssociationAnalysisRuleCustom $custom
 */
class ConfiguredTableAssociationAnalysisRulePolicyV1 extends Shape
{
    /**
     * @param array{
     *     list?: ConfiguredTableAssociationAnalysisRuleList,
     *     aggregation?: ConfiguredTableAssociationAnalysisRuleAggregation,
     *     custom?: ConfiguredTableAssociationAnalysisRuleCustom
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
