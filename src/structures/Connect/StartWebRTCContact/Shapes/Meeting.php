<?php

namespace Sunaoka\Aws\Structures\Connect\StartWebRTCContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MediaRegion
 * @property MediaPlacement $MediaPlacement
 * @property MeetingFeaturesConfiguration $MeetingFeatures
 * @property string $MeetingId
 */
class Meeting extends Shape
{
    /**
     * @param array{
     *     MediaRegion?: string,
     *     MediaPlacement?: MediaPlacement,
     *     MeetingFeatures?: MeetingFeaturesConfiguration,
     *     MeetingId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
