<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetDeviceRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
