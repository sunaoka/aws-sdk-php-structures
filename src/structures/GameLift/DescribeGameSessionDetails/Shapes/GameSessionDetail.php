<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameSessionDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GameSession $GameSession
 * @property 'NoProtection'|'FullProtection' $ProtectionPolicy
 */
class GameSessionDetail extends Shape
{
    /**
     * @param array{
     *     GameSession?: GameSession,
     *     ProtectionPolicy?: 'NoProtection'|'FullProtection'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
