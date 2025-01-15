<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DailyCap
 * @property int|null $EndpointReentryCap
 * @property int|null $MessagesPerSecond
 * @property string|null $EndpointReentryInterval
 * @property JourneyTimeframeCap|null $TimeframeCap
 * @property int|null $TotalCap
 */
class JourneyLimits extends Shape
{
    /**
     * @param array{
     *     DailyCap?: int|null,
     *     EndpointReentryCap?: int|null,
     *     MessagesPerSecond?: int|null,
     *     EndpointReentryInterval?: string|null,
     *     TimeframeCap?: JourneyTimeframeCap|null,
     *     TotalCap?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
