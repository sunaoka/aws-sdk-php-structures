<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFleets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $principalId
 * @property string $displayName
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED' $status
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListFleetsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     principalId?: string,
     *     displayName?: string,
     *     status?: 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED',
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
