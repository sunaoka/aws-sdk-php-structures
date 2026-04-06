<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListLaunchProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $principalId
 * @property list<'CREATE_IN_PROGRESS'|'READY'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'DELETED'|'DELETE_FAILED'|'CREATE_FAILED'|'UPDATE_FAILED'>|null $states
 * @property string $studioId
 */
class ListLaunchProfilesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     principalId?: string|null,
     *     states?: list<'CREATE_IN_PROGRESS'|'READY'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'DELETED'|'DELETE_FAILED'|'CREATE_FAILED'|'UPDATE_FAILED'>|null,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
