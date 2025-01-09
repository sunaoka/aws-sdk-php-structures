<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $event
 * @property \Aws\Api\DateTimeResult $eventDate
 */
class BotLocaleHistoryEvent extends Shape
{
    /**
     * @param array{
     *     event: string,
     *     eventDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
