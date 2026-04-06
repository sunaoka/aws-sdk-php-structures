<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string|null $description
 * @property TableReference $tableReference
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property list<'AGGREGATION'|'LIST'|'CUSTOM'> $analysisRuleTypes
 * @property 'DIRECT_QUERY' $analysisMethod
 * @property list<string> $allowedColumns
 */
class ConfiguredTable extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     name: string,
     *     description?: string|null,
     *     tableReference: TableReference,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     analysisRuleTypes: list<'AGGREGATION'|'LIST'|'CUSTOM'>,
     *     analysisMethod: 'DIRECT_QUERY',
     *     allowedColumns: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
