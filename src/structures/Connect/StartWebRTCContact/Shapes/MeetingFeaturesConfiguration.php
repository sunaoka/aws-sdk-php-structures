<?php

namespace Sunaoka\Aws\Structures\Connect\StartWebRTCContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioFeatures $Audio
 */
class MeetingFeaturesConfiguration extends Shape
{
    /**
     * @param array{Audio?: AudioFeatures} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
