<?php

namespace Sunaoka\Aws\Structures\Omics\ListRunGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $startingToken
 * @property int $maxResults
 */
class ListRunGroupsRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     startingToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
