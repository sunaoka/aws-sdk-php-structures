<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListStudioComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property list<'CREATE_IN_PROGRESS'|'READY'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'DELETED'|'DELETE_FAILED'|'CREATE_FAILED'|'UPDATE_FAILED'>|null $states
 * @property string $studioId
 * @property list<'ACTIVE_DIRECTORY'|'SHARED_FILE_SYSTEM'|'COMPUTE_FARM'|'LICENSE_SERVICE'|'CUSTOM'>|null $types
 */
class ListStudioComponentsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     states?: list<'CREATE_IN_PROGRESS'|'READY'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'DELETED'|'DELETE_FAILED'|'CREATE_FAILED'|'UPDATE_FAILED'>|null,
     *     studioId: string,
     *     types?: list<'ACTIVE_DIRECTORY'|'SHARED_FILE_SYSTEM'|'COMPUTE_FARM'|'LICENSE_SERVICE'|'CUSTOM'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
