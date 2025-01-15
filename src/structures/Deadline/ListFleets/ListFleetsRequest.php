<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFleets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string|null $principalId
 * @property string|null $displayName
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|null $status
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListFleetsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     principalId?: string|null,
     *     displayName?: string|null,
     *     status?: 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
