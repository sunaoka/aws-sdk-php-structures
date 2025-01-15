<?php

namespace Sunaoka\Aws\Structures\Omics\ListRunGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property string|null $startingToken
 * @property int<1, 100>|null $maxResults
 */
class ListRunGroupsRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     startingToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
