<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredTableAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnalysisRuleList $list
 * @property AnalysisRuleAggregation $aggregation
 * @property AnalysisRuleCustom $custom
 */
class ConfiguredTableAnalysisRulePolicyV1 extends Shape
{
    /**
     * @param array{
     *     list?: AnalysisRuleList,
     *     aggregation?: AnalysisRuleAggregation,
     *     custom?: AnalysisRuleCustom
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
