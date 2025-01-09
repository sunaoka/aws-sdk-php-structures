<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListInputDeviceTransfers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Message
 * @property string $TargetCustomerId
 * @property 'OUTGOING'|'INCOMING' $TransferType
 */
class TransferringInputDeviceSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Message?: string,
     *     TargetCustomerId?: string,
     *     TransferType?: 'OUTGOING'|'INCOMING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
