<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListReceivedDataGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 200> $MaxResults
 * @property string $NextToken
 * @property list<'PENDING_RECEIVER_ACCEPTANCE'|'ACCEPTED'> $AcceptanceState
 */
class ListReceivedDataGrantsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 200>,
     *     NextToken?: string,
     *     AcceptanceState?: list<'PENDING_RECEIVER_ACCEPTANCE'|'ACCEPTED'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
