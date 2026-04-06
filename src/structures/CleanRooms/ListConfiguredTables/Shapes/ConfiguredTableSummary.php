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
 * @property 'DIRECT_QUERY' $analysisMethod
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
     *     analysisMethod: 'DIRECT_QUERY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
