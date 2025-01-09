<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceBotVersion
 */
class BotVersionLocaleDetails extends Shape
{
    /**
     * @param array{sourceBotVersion: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
