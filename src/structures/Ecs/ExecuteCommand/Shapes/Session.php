<?php

namespace Sunaoka\Aws\Structures\Ecs\ExecuteCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionId
 * @property string $streamUrl
 * @property string $tokenValue
 */
class Session extends Shape
{
    /**
     * @param array{
     *     sessionId?: string,
     *     streamUrl?: string,
     *     tokenValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
