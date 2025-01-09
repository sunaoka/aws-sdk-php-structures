<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseCapacityBlockExtension;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityBlockExtensionOfferingId
 * @property string $CapacityReservationId
 * @property bool $DryRun
 */
class PurchaseCapacityBlockExtensionRequest extends Request
{
    /**
     * @param array{
     *     CapacityBlockExtensionOfferingId: string,
     *     CapacityReservationId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
