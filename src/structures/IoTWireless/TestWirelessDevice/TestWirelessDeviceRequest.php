<?php

namespace Sunaoka\Aws\Structures\IoTWireless\TestWirelessDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class TestWirelessDeviceRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
