<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetDevicePool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetDevicePoolRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
