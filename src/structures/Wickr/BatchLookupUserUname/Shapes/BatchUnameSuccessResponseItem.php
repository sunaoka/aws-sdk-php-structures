<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchLookupUserUname\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $uname
 * @property string $username
 */
class BatchUnameSuccessResponseItem extends Shape
{
    /**
     * @param array{
     *     uname: string,
     *     username: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
