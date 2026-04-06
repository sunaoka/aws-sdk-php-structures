<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetSchema\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Column> $columns
 * @property list<Column> $partitionKeys
 * @property list<'AGGREGATION'|'LIST'|'CUSTOM'> $analysisRuleTypes
 * @property 'DIRECT_QUERY'|null $analysisMethod
 * @property string $creatorAccountId
 * @property string $name
 * @property string $collaborationId
 * @property string $collaborationArn
 * @property string $description
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property 'TABLE' $type
 */
class Schema extends Shape
{
    /**
     * @param array{
     *     columns: list<Column>,
     *     partitionKeys: list<Column>,
     *     analysisRuleTypes: list<'AGGREGATION'|'LIST'|'CUSTOM'>,
     *     analysisMethod?: 'DIRECT_QUERY'|null,
     *     creatorAccountId: string,
     *     name: string,
     *     collaborationId: string,
     *     collaborationArn: string,
     *     description: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     type: 'TABLE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
