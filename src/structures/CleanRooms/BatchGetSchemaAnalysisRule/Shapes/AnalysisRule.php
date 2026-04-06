<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetSchemaAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $collaborationId
 * @property 'AGGREGATION'|'LIST'|'CUSTOM'|'ID_MAPPING_TABLE' $type
 * @property string $name
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property AnalysisRulePolicy $policy
 * @property ConfiguredTableAssociationAnalysisRulePolicy|null $collaborationPolicy
 * @property ConsolidatedPolicy|null $consolidatedPolicy
 */
class AnalysisRule extends Shape
{
    /**
     * @param array{
     *     collaborationId: string,
     *     type: 'AGGREGATION'|'LIST'|'CUSTOM'|'ID_MAPPING_TABLE',
     *     name: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     policy: AnalysisRulePolicy,
     *     collaborationPolicy?: ConfiguredTableAssociationAnalysisRulePolicy|null,
     *     consolidatedPolicy?: ConsolidatedPolicy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
