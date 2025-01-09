<?php

namespace Sunaoka\Aws\Structures\MemoryDB\PurchaseReservedNodesOffering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedNodesOfferingId
 * @property string $ReservationId
 * @property int $NodeCount
 * @property list<Shapes\Tag> $Tags
 */
class PurchaseReservedNodesOfferingRequest extends Request
{
    /**
     * @param array{
     *     ReservedNodesOfferingId: string,
     *     ReservationId?: string,
     *     NodeCount?: int,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
