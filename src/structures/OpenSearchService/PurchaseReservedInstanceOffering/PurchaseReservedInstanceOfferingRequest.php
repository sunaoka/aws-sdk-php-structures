<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\PurchaseReservedInstanceOffering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedInstanceOfferingId
 * @property string $ReservationName
 * @property int $InstanceCount
 */
class PurchaseReservedInstanceOfferingRequest extends Request
{
    /**
     * @param array{
     *     ReservedInstanceOfferingId: string,
     *     ReservationName: string,
     *     InstanceCount?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
