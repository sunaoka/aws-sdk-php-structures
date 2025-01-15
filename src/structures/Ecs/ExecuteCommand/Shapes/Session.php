<?php

namespace Sunaoka\Aws\Structures\Ecs\ExecuteCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sessionId
 * @property string|null $streamUrl
 * @property string|null $tokenValue
 */
class Session extends Shape
{
    /**
     * @param array{
     *     sessionId?: string|null,
     *     streamUrl?: string|null,
     *     tokenValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
