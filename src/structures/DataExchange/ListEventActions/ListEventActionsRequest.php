<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListEventActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventSourceId
 * @property int<1, 200> $MaxResults
 * @property string $NextToken
 */
class ListEventActionsRequest extends Request
{
    /**
     * @param array{
     *     EventSourceId?: string,
     *     MaxResults?: int<1, 200>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
