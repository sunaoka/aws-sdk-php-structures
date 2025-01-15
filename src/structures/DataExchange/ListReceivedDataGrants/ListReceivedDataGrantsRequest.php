<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListReceivedDataGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 200>|null $MaxResults
 * @property string|null $NextToken
 * @property list<'PENDING_RECEIVER_ACCEPTANCE'|'ACCEPTED'>|null $AcceptanceState
 */
class ListReceivedDataGrantsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 200>|null,
     *     NextToken?: string|null,
     *     AcceptanceState?: list<'PENDING_RECEIVER_ACCEPTANCE'|'ACCEPTED'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
