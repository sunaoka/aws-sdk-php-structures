<?php

namespace Sunaoka\Aws\Structures\Macie2\ListAllowLists;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 25> $maxResults
 * @property string $nextToken
 */
class ListAllowListsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 25>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
