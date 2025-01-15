<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListInputDeviceTransfers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Message
 * @property string|null $TargetCustomerId
 * @property 'OUTGOING'|'INCOMING'|null $TransferType
 */
class TransferringInputDeviceSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Message?: string|null,
     *     TargetCustomerId?: string|null,
     *     TransferType?: 'OUTGOING'|'INCOMING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
