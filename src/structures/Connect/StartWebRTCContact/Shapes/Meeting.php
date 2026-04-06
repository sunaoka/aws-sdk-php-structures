<?php

namespace Sunaoka\Aws\Structures\Connect\StartWebRTCContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MediaRegion
 * @property MediaPlacement|null $MediaPlacement
 * @property MeetingFeaturesConfiguration|null $MeetingFeatures
 * @property string|null $MeetingId
 */
class Meeting extends Shape
{
    /**
     * @param array{
     *     MediaRegion?: string|null,
     *     MediaPlacement?: MediaPlacement|null,
     *     MeetingFeatures?: MeetingFeaturesConfiguration|null,
     *     MeetingId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
