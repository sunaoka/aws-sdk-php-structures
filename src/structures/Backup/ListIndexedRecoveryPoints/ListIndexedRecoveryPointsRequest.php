<?php

namespace Sunaoka\Aws\Structures\Backup\ListIndexedRecoveryPoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $SourceResourceArn
 * @property \Aws\Api\DateTimeResult $CreatedBefore
 * @property \Aws\Api\DateTimeResult $CreatedAfter
 * @property string $ResourceType
 * @property 'PENDING'|'ACTIVE'|'FAILED'|'DELETING' $IndexStatus
 */
class ListIndexedRecoveryPointsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     SourceResourceArn?: string,
     *     CreatedBefore?: \Aws\Api\DateTimeResult,
     *     CreatedAfter?: \Aws\Api\DateTimeResult,
     *     ResourceType?: string,
     *     IndexStatus?: 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
