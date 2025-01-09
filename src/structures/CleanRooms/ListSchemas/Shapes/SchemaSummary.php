<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'TABLE'|'ID_MAPPING_TABLE' $type
 * @property string $creatorAccountId
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $collaborationId
 * @property string $collaborationArn
 * @property list<'AGGREGATION'|'LIST'|'CUSTOM'|'ID_MAPPING_TABLE'> $analysisRuleTypes
 * @property 'DIRECT_QUERY' $analysisMethod
 */
class SchemaSummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'TABLE'|'ID_MAPPING_TABLE',
     *     creatorAccountId: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     collaborationId: string,
     *     collaborationArn: string,
     *     analysisRuleTypes: list<'AGGREGATION'|'LIST'|'CUSTOM'|'ID_MAPPING_TABLE'>,
     *     analysisMethod?: 'DIRECT_QUERY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
