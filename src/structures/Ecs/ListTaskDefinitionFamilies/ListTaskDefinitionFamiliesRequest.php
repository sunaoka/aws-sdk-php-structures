<?php

namespace Sunaoka\Aws\Structures\Ecs\ListTaskDefinitionFamilies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $familyPrefix
 * @property 'ACTIVE'|'INACTIVE'|'ALL'|null $status
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListTaskDefinitionFamiliesRequest extends Request
{
    /**
     * @param array{
     *     familyPrefix?: string|null,
     *     status?: 'ACTIVE'|'INACTIVE'|'ALL'|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
