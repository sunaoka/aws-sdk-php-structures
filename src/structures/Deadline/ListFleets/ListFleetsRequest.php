<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFleets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $displayName
 * @property string $farmId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $principalId
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|null $status
 */
class ListFleetsRequest extends Request
{
    /**
     * @param array{
     *     displayName?: string|null,
     *     farmId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     principalId?: string|null,
     *     status?: 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
