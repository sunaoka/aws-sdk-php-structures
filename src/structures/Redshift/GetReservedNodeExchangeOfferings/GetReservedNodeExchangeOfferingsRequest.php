<?php

namespace Sunaoka\Aws\Structures\Redshift\GetReservedNodeExchangeOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedNodeId
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class GetReservedNodeExchangeOfferingsRequest extends Request
{
    /**
     * @param array{
     *     ReservedNodeId: string,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
