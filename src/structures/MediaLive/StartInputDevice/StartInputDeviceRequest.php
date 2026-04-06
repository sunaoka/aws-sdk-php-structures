<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartInputDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InputDeviceId
 */
class StartInputDeviceRequest extends Request
{
    /**
     * @param array{InputDeviceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
