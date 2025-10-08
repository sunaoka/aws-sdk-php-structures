<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\CreateParticipantConnection\Shapes;

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
