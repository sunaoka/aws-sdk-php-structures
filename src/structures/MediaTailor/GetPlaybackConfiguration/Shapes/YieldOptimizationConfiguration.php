<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetPlaybackConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<6, 3600> $MinimumUnfilledDuration
 * @property string $PublisherId
 * @property 'AMERICAS'|'EUROPE'|'ASIA_PACIFIC' $Region
 * @property string $OpenRtbTemplate
 */
class YieldOptimizationConfiguration extends Shape
{
    /**
     * @param array{
     *     MinimumUnfilledDuration: int<6, 3600>,
     *     PublisherId: string,
     *     Region: 'AMERICAS'|'EUROPE'|'ASIA_PACIFIC',
     *     OpenRtbTemplate: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
