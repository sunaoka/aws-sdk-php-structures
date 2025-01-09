<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DailyCap
 * @property int $EndpointReentryCap
 * @property int $MessagesPerSecond
 * @property string $EndpointReentryInterval
 * @property JourneyTimeframeCap $TimeframeCap
 * @property int $TotalCap
 */
class JourneyLimits extends Shape
{
    /**
     * @param array{
     *     DailyCap?: int,
     *     EndpointReentryCap?: int,
     *     MessagesPerSecond?: int,
     *     EndpointReentryInterval?: string,
     *     TimeframeCap?: JourneyTimeframeCap,
     *     TotalCap?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
