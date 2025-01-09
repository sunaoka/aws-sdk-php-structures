<?php

namespace Sunaoka\Aws\Structures\MediaLive\TransferInputDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InputDeviceId
 * @property string $TargetCustomerId
 * @property string $TargetRegion
 * @property string $TransferMessage
 */
class TransferInputDeviceRequest extends Request
{
    /**
     * @param array{
     *     InputDeviceId: string,
     *     TargetCustomerId?: string,
     *     TargetRegion?: string,
     *     TransferMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
