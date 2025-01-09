<?php

namespace Sunaoka\Aws\Structures\Athena\ListQueryExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<0, 50> $MaxResults
 * @property string $WorkGroup
 */
class ListQueryExecutionsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<0, 50>,
     *     WorkGroup?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
