<?php

namespace Sunaoka\Aws\Structures\Connect\ListBots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LexBot $LexBot
 * @property LexV2Bot $LexV2Bot
 */
class LexBotConfig extends Shape
{
    /**
     * @param array{
     *     LexBot?: LexBot,
     *     LexV2Bot?: LexV2Bot
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
