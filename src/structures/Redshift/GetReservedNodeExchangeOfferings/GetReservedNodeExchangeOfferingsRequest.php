<?php

namespace Sunaoka\Aws\Structures\Redshift\GetReservedNodeExchangeOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedNodeId
 * @property int $MaxRecords
 * @property string $Marker
 */
class GetReservedNodeExchangeOfferingsRequest extends Request
{
    /**
     * @param array{
     *     ReservedNodeId: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
