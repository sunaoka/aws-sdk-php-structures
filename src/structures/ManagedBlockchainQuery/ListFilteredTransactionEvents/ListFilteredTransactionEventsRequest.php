<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListFilteredTransactionEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $network
 * @property Shapes\AddressIdentifierFilter $addressIdentifierFilter
 * @property Shapes\TimeFilter $timeFilter
 * @property Shapes\VoutFilter $voutFilter
 * @property Shapes\ConfirmationStatusFilter $confirmationStatusFilter
 * @property Shapes\ListFilteredTransactionEventsSort $sort
 * @property string $nextToken
 * @property int $maxResults
 */
class ListFilteredTransactionEventsRequest extends Request
{
    /**
     * @param array{
     *     network: string,
     *     addressIdentifierFilter: Shapes\AddressIdentifierFilter,
     *     timeFilter?: Shapes\TimeFilter,
     *     voutFilter?: Shapes\VoutFilter,
     *     confirmationStatusFilter?: Shapes\ConfirmationStatusFilter,
     *     sort?: Shapes\ListFilteredTransactionEventsSort,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
