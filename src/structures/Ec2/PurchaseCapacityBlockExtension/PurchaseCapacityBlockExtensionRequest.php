<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseCapacityBlockExtension;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityBlockExtensionOfferingId
 * @property string $CapacityReservationId
 * @property bool|null $DryRun
 */
class PurchaseCapacityBlockExtensionRequest extends Request
{
    /**
     * @param array{
     *     CapacityBlockExtensionOfferingId: string,
     *     CapacityReservationId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
