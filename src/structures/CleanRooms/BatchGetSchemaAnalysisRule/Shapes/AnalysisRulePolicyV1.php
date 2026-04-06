<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetSchemaAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnalysisRuleList|null $list
 * @property AnalysisRuleAggregation|null $aggregation
 * @property AnalysisRuleCustom|null $custom
 * @property AnalysisRuleIdMappingTable|null $idMappingTable
 */
class AnalysisRulePolicyV1 extends Shape
{
    /**
     * @param array{
     *     list?: AnalysisRuleList|null,
     *     aggregation?: AnalysisRuleAggregation|null,
     *     custom?: AnalysisRuleCustom|null,
     *     idMappingTable?: AnalysisRuleIdMappingTable|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
