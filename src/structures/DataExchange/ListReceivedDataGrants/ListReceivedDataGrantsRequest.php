<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListReceivedDataGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<'PENDING_RECEIVER_ACCEPTANCE'|'ACCEPTED'> $AcceptanceState
 */
class ListReceivedDataGrantsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     AcceptanceState?: list<'PENDING_RECEIVER_ACCEPTANCE'|'ACCEPTED'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
