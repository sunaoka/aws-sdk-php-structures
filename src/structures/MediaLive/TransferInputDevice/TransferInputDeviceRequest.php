<?php

namespace Sunaoka\Aws\Structures\MediaLive\TransferInputDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InputDeviceId
 * @property string|null $TargetCustomerId
 * @property string|null $TargetRegion
 * @property string|null $TransferMessage
 */
class TransferInputDeviceRequest extends Request
{
    /**
     * @param array{
     *     InputDeviceId: string,
     *     TargetCustomerId?: string|null,
     *     TargetRegion?: string|null,
     *     TransferMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
