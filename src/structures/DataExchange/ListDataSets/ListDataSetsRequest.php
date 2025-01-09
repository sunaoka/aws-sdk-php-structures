<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListDataSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 200> $MaxResults
 * @property string $NextToken
 * @property string $Origin
 */
class ListDataSetsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 200>,
     *     NextToken?: string,
     *     Origin?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
