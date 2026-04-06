<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListFilteredTransactionEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $network
 * @property Shapes\AddressIdentifierFilter $addressIdentifierFilter
 * @property Shapes\TimeFilter|null $timeFilter
 * @property Shapes\VoutFilter|null $voutFilter
 * @property Shapes\ConfirmationStatusFilter|null $confirmationStatusFilter
 * @property Shapes\ListFilteredTransactionEventsSort|null $sort
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListFilteredTransactionEventsRequest extends Request
{
    /**
     * @param array{
     *     network: string,
     *     addressIdentifierFilter: Shapes\AddressIdentifierFilter,
     *     timeFilter?: Shapes\TimeFilter|null,
     *     voutFilter?: Shapes\VoutFilter|null,
     *     confirmationStatusFilter?: Shapes\ConfirmationStatusFilter|null,
     *     sort?: Shapes\ListFilteredTransactionEventsSort|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
