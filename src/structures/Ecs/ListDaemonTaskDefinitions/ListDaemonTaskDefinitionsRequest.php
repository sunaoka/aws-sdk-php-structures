<?php

namespace Sunaoka\Aws\Structures\Ecs\ListDaemonTaskDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $familyPrefix
 * @property string|null $family
 * @property 'LAST_REGISTERED'|null $revision
 * @property 'ACTIVE'|'DELETE_IN_PROGRESS'|'ALL'|null $status
 * @property 'ASC'|'DESC'|null $sort
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListDaemonTaskDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     familyPrefix?: string|null,
     *     family?: string|null,
     *     revision?: 'LAST_REGISTERED'|null,
     *     status?: 'ACTIVE'|'DELETE_IN_PROGRESS'|'ALL'|null,
     *     sort?: 'ASC'|'DESC'|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
