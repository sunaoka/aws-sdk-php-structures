<?php

namespace Sunaoka\Aws\Structures\Connect\ListBots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LexBot|null $LexBot
 * @property LexV2Bot|null $LexV2Bot
 */
class LexBotConfig extends Shape
{
    /**
     * @param array{
     *     LexBot?: LexBot|null,
     *     LexV2Bot?: LexV2Bot|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
