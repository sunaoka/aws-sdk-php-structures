<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTableAssociationAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfiguredTableAssociationAnalysisRuleList|null $list
 * @property ConfiguredTableAssociationAnalysisRuleAggregation|null $aggregation
 * @property ConfiguredTableAssociationAnalysisRuleCustom|null $custom
 */
class ConfiguredTableAssociationAnalysisRulePolicyV1 extends Shape
{
    /**
     * @param array{
     *     list?: ConfiguredTableAssociationAnalysisRuleList|null,
     *     aggregation?: ConfiguredTableAssociationAnalysisRuleAggregation|null,
     *     custom?: ConfiguredTableAssociationAnalysisRuleCustom|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
