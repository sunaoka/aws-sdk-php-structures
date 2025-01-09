<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\PurchaseReservedInstanceOffering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedInstanceOfferingId
 * @property string $ReservationName
 * @property int<1, max> $InstanceCount
 */
class PurchaseReservedInstanceOfferingRequest extends Request
{
    /**
     * @param array{
     *     ReservedInstanceOfferingId: string,
     *     ReservationName: string,
     *     InstanceCount?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
