<?php

namespace Sunaoka\Aws\Structures\Iot\ListOTAUpdates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 250> $maxResults
 * @property string $nextToken
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED' $otaUpdateStatus
 */
class ListOTAUpdatesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 250>,
     *     nextToken?: string,
     *     otaUpdateStatus?: 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
