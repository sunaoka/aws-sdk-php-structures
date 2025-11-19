<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\PutRumEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userId
 * @property string|null $sessionId
 */
class UserDetails extends Shape
{
    /**
     * @param array{
     *     userId?: string|null,
     *     sessionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
