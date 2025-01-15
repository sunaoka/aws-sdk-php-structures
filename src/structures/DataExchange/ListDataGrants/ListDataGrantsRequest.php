<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListDataGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 200>|null $MaxResults
 * @property string|null $NextToken
 */
class ListDataGrantsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 200>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
