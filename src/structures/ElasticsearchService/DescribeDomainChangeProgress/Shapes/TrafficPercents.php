<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeDomainChangeProgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100> $PrimaryReadTrafficPercent
 * @property int<0, 100> $CloneReadTrafficPercent
 */
class TrafficPercents extends Shape
{
    /**
     * @param array{
     *     PrimaryReadTrafficPercent: int<0, 100>,
     *     CloneReadTrafficPercent: int<0, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
