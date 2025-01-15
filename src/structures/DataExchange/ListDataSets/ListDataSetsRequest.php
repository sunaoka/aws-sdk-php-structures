<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListDataSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 200>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $Origin
 */
class ListDataSetsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 200>|null,
     *     NextToken?: string|null,
     *     Origin?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
