<?php

namespace Sunaoka\Aws\Structures\Omics\ListRunGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $startingToken
 * @property int<1, 100> $maxResults
 */
class ListRunGroupsRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     startingToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
