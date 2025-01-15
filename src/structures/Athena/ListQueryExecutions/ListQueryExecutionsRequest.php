<?php

namespace Sunaoka\Aws\Structures\Athena\ListQueryExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<0, 50>|null $MaxResults
 * @property string|null $WorkGroup
 */
class ListQueryExecutionsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 50>|null,
     *     WorkGroup?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
