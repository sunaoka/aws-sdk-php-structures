<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchLookupUserUname\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $field
 * @property string|null $reason
 * @property string $uname
 */
class BatchUnameErrorResponseItem extends Shape
{
    /**
     * @param array{
     *     field?: string|null,
     *     reason?: string|null,
     *     uname: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
