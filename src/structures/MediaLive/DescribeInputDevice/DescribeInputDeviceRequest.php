<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeInputDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InputDeviceId
 */
class DescribeInputDeviceRequest extends Request
{
    /**
     * @param array{InputDeviceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
