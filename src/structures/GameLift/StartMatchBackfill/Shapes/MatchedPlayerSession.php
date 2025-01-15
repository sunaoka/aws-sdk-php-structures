<?php

namespace Sunaoka\Aws\Structures\GameLift\StartMatchBackfill\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PlayerId
 * @property string|null $PlayerSessionId
 */
class MatchedPlayerSession extends Shape
{
    /**
     * @param array{
     *     PlayerId?: string|null,
     *     PlayerSessionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
