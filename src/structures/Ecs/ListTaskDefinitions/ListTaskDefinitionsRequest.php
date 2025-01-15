<?php

namespace Sunaoka\Aws\Structures\Ecs\ListTaskDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $familyPrefix
 * @property 'ACTIVE'|'INACTIVE'|'DELETE_IN_PROGRESS'|null $status
 * @property 'ASC'|'DESC'|null $sort
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListTaskDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     familyPrefix?: string|null,
     *     status?: 'ACTIVE'|'INACTIVE'|'DELETE_IN_PROGRESS'|null,
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
