<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateParticipantRoleConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Unset' $ParticipantTimerAction
 * @property int $ParticipantTimerDurationInMinutes
 */
class ParticipantTimerValue extends Shape
{
    /**
     * @param array{
     *     ParticipantTimerAction?: 'Unset',
     *     ParticipantTimerDurationInMinutes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
