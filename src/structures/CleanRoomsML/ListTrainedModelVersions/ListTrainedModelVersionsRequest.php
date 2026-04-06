<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListTrainedModelVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string $membershipIdentifier
 * @property string $trainedModelArn
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'INACTIVE'|'CANCEL_PENDING'|'CANCEL_IN_PROGRESS'|'CANCEL_FAILED'|null $status
 */
class ListTrainedModelVersionsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     membershipIdentifier: string,
     *     trainedModelArn: string,
     *     status?: 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'INACTIVE'|'CANCEL_PENDING'|'CANCEL_IN_PROGRESS'|'CANCEL_FAILED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
