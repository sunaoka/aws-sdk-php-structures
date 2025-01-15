<?php

namespace Sunaoka\Aws\Structures\MemoryDB\PurchaseReservedNodesOffering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedNodesOfferingId
 * @property string|null $ReservationId
 * @property int|null $NodeCount
 * @property list<Shapes\Tag>|null $Tags
 */
class PurchaseReservedNodesOfferingRequest extends Request
{
    /**
     * @param array{
     *     ReservedNodesOfferingId: string,
     *     ReservationId?: string|null,
     *     NodeCount?: int|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
