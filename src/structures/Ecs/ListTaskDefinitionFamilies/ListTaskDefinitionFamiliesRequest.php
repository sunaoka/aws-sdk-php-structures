<?php

namespace Sunaoka\Aws\Structures\Ecs\ListTaskDefinitionFamilies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $familyPrefix
 * @property 'ACTIVE'|'INACTIVE'|'ALL' $status
 * @property string $nextToken
 * @property int $maxResults
 */
class ListTaskDefinitionFamiliesRequest extends Request
{
    /**
     * @param array{
     *     familyPrefix?: string,
     *     status?: 'ACTIVE'|'INACTIVE'|'ALL',
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
