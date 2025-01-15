<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListEventActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EventSourceId
 * @property int<1, 200>|null $MaxResults
 * @property string|null $NextToken
 */
class ListEventActionsRequest extends Request
{
    /**
     * @param array{
     *     EventSourceId?: string|null,
     *     MaxResults?: int<1, 200>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
