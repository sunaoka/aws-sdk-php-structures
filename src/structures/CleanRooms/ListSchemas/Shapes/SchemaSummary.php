<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'TABLE' $type
 * @property string $creatorAccountId
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $collaborationId
 * @property string $collaborationArn
 * @property list<'AGGREGATION'|'LIST'|'CUSTOM'> $analysisRuleTypes
 * @property 'DIRECT_QUERY'|null $analysisMethod
 */
class SchemaSummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'TABLE',
     *     creatorAccountId: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     collaborationId: string,
     *     collaborationArn: string,
     *     analysisRuleTypes: list<'AGGREGATION'|'LIST'|'CUSTOM'>,
     *     analysisMethod?: 'DIRECT_QUERY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
