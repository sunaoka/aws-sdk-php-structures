<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\DeleteDevicePool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteDevicePoolRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
