<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateConfiguredTableAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnalysisRuleList|null $list
 * @property AnalysisRuleAggregation|null $aggregation
 * @property AnalysisRuleCustom|null $custom
 */
class ConfiguredTableAnalysisRulePolicyV1 extends Shape
{
    /**
     * @param array{
     *     list?: AnalysisRuleList|null,
     *     aggregation?: AnalysisRuleAggregation|null,
     *     custom?: AnalysisRuleCustom|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
