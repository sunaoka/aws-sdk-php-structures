<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListConfiguredTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property list<'AGGREGATION'|'LIST'|'CUSTOM'> $analysisRuleTypes
 * @property 'DIRECT_QUERY'|'DIRECT_JOB'|'MULTIPLE' $analysisMethod
 * @property list<'DIRECT_QUERY'|'DIRECT_JOB'>|null $selectedAnalysisMethods
 */
class ConfiguredTableSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     name: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     analysisRuleTypes: list<'AGGREGATION'|'LIST'|'CUSTOM'>,
     *     analysisMethod: 'DIRECT_QUERY'|'DIRECT_JOB'|'MULTIPLE',
     *     selectedAnalysisMethods?: list<'DIRECT_QUERY'|'DIRECT_JOB'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
