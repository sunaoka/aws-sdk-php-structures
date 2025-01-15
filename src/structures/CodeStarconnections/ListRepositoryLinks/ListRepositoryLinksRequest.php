<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\ListRepositoryLinks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListRepositoryLinksRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
