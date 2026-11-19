<?php

namespace Sunaoka\Aws\Structures\Signin\BatchRevokeSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionArn
 * @property string $code
 * @property string $message
 */
class BatchRevokeSessionError extends Shape
{
    /**
     * @param array{
     *     sessionArn: string,
     *     code: string,
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
