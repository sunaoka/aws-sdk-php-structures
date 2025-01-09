<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetSchemaAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnalysisRuleList $list
 * @property AnalysisRuleAggregation $aggregation
 * @property AnalysisRuleCustom $custom
 * @property AnalysisRuleIdMappingTable $idMappingTable
 */
class AnalysisRulePolicyV1 extends Shape
{
    /**
     * @param array{
     *     list?: AnalysisRuleList,
     *     aggregation?: AnalysisRuleAggregation,
     *     custom?: AnalysisRuleCustom,
     *     idMappingTable?: AnalysisRuleIdMappingTable
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
