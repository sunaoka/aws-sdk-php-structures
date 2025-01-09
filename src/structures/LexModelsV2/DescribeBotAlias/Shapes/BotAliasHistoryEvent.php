<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botVersion
 * @property \Aws\Api\DateTimeResult $startDate
 * @property \Aws\Api\DateTimeResult $endDate
 */
class BotAliasHistoryEvent extends Shape
{
    /**
     * @param array{
     *     botVersion?: string,
     *     startDate?: \Aws\Api\DateTimeResult,
     *     endDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
