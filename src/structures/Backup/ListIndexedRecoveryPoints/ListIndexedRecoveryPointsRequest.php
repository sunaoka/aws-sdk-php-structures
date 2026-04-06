<?php

namespace Sunaoka\Aws\Structures\Backup\ListIndexedRecoveryPoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $SourceResourceArn
 * @property \Aws\Api\DateTimeResult|null $CreatedBefore
 * @property \Aws\Api\DateTimeResult|null $CreatedAfter
 * @property string|null $ResourceType
 * @property 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|null $IndexStatus
 */
class ListIndexedRecoveryPointsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     SourceResourceArn?: string|null,
     *     CreatedBefore?: \Aws\Api\DateTimeResult|null,
     *     CreatedAfter?: \Aws\Api\DateTimeResult|null,
     *     ResourceType?: string|null,
     *     IndexStatus?: 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
