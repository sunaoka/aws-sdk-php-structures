<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchResetDevicesForUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appId
 */
class BatchDeviceSuccessResponseItem extends Shape
{
    /**
     * @param array{appId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
