<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetDeviceInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetDeviceInstanceRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
