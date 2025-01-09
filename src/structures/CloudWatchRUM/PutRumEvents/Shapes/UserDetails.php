<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\PutRumEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionId
 * @property string $userId
 */
class UserDetails extends Shape
{
    /**
     * @param array{
     *     sessionId?: string,
     *     userId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
