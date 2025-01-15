<?php

namespace Sunaoka\Aws\Structures\Connect\StartWebRTCContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioFeatures|null $Audio
 */
class MeetingFeaturesConfiguration extends Shape
{
    /**
     * @param array{Audio?: AudioFeatures|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
