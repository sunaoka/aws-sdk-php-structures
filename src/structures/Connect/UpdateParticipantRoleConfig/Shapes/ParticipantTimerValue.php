<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateParticipantRoleConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Unset' $ParticipantTimerAction
 * @property int<2, 480> $ParticipantTimerDurationInMinutes
 */
class ParticipantTimerValue extends Shape
{
    /**
     * @param array{
     *     ParticipantTimerAction?: 'Unset',
     *     ParticipantTimerDurationInMinutes?: int<2, 480>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
