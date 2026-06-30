<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListIntermediateTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string|null $description
 * @property string $membershipArn
 * @property string $membershipId
 * @property string $collaborationArn
 * @property string $collaborationId
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property 'CREATED'|'POPULATE_STARTED'|'POPULATE_SUCCESS'|'POPULATE_FAILED'|'DISALLOWED_BY_DATA_PROVIDER'|'BASE_TABLE_REMOVED'|'RETENTION_PERIOD_EXPIRED' $status
 * @property int|null $retentionInDays
 * @property list<'CUSTOM'>|null $analysisRuleTypes
 */
class IntermediateTableSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     name: string,
     *     description?: string|null,
     *     membershipArn: string,
     *     membershipId: string,
     *     collaborationArn: string,
     *     collaborationId: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     status: 'CREATED'|'POPULATE_STARTED'|'POPULATE_SUCCESS'|'POPULATE_FAILED'|'DISALLOWED_BY_DATA_PROVIDER'|'BASE_TABLE_REMOVED'|'RETENTION_PERIOD_EXPIRED',
     *     retentionInDays?: int|null,
     *     analysisRuleTypes?: list<'CUSTOM'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
