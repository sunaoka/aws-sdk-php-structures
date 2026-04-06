<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchCreateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $field
 * @property string|null $reason
 * @property string $userId
 */
class BatchUserErrorResponseItem extends Shape
{
    /**
     * @param array{
     *     field?: string|null,
     *     reason?: string|null,
     *     userId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
