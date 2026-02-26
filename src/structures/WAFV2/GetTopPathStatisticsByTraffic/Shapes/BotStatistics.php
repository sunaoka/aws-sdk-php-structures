<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetTopPathStatisticsByTraffic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BotName
 * @property int<0, max> $RequestCount
 * @property double $Percentage
 */
class BotStatistics extends Shape
{
    /**
     * @param array{
     *     BotName: string,
     *     RequestCount: int<0, max>,
     *     Percentage: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
