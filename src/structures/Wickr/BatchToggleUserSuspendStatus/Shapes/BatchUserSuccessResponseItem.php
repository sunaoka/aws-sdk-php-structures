<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchToggleUserSuspendStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userId
 */
class BatchUserSuccessResponseItem extends Shape
{
    /**
     * @param array{userId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
