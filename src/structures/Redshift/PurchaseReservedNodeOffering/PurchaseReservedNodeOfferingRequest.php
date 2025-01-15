<?php

namespace Sunaoka\Aws\Structures\Redshift\PurchaseReservedNodeOffering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedNodeOfferingId
 * @property int|null $NodeCount
 */
class PurchaseReservedNodeOfferingRequest extends Request
{
    /**
     * @param array{
     *     ReservedNodeOfferingId: string,
     *     NodeCount?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
