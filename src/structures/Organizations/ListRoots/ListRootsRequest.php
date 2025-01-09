<?php

namespace Sunaoka\Aws\Structures\Organizations\ListRoots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 20> $MaxResults
 */
class ListRootsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 20>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
