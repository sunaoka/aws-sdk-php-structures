<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetTopPathStatisticsByTraffic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilterSource|null $Source
 * @property string $Path
 * @property int<0, max> $RequestCount
 * @property double $Percentage
 * @property list<BotStatistics>|null $TopBots
 */
class PathStatistics extends Shape
{
    /**
     * @param array{
     *     Source?: FilterSource|null,
     *     Path: string,
     *     RequestCount: int<0, max>,
     *     Percentage: double,
     *     TopBots?: list<BotStatistics>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
