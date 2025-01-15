<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameSessionDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GameSession|null $GameSession
 * @property 'NoProtection'|'FullProtection'|null $ProtectionPolicy
 */
class GameSessionDetail extends Shape
{
    /**
     * @param array{
     *     GameSession?: GameSession|null,
     *     ProtectionPolicy?: 'NoProtection'|'FullProtection'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
