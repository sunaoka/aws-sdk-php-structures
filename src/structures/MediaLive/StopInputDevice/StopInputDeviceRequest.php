<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopInputDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InputDeviceId
 */
class StopInputDeviceRequest extends Request
{
    /**
     * @param array{InputDeviceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
