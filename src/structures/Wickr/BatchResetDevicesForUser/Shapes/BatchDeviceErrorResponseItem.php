<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchResetDevicesForUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $field
 * @property string|null $reason
 * @property string $appId
 */
class BatchDeviceErrorResponseItem extends Shape
{
    /**
     * @param array{
     *     field?: string|null,
     *     reason?: string|null,
     *     appId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
