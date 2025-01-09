<?php

namespace Sunaoka\Aws\Structures\Ecs\ListTaskDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $familyPrefix
 * @property 'ACTIVE'|'INACTIVE'|'DELETE_IN_PROGRESS' $status
 * @property 'ASC'|'DESC' $sort
 * @property string $nextToken
 * @property int $maxResults
 */
class ListTaskDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     familyPrefix?: string,
     *     status?: 'ACTIVE'|'INACTIVE'|'DELETE_IN_PROGRESS',
     *     sort?: 'ASC'|'DESC',
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
