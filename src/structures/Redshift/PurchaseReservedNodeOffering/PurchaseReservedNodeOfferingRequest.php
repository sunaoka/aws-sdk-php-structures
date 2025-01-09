<?php

namespace Sunaoka\Aws\Structures\Redshift\PurchaseReservedNodeOffering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedNodeOfferingId
 * @property int $NodeCount
 */
class PurchaseReservedNodeOfferingRequest extends Request
{
    /**
     * @param array{
     *     ReservedNodeOfferingId: string,
     *     NodeCount?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
