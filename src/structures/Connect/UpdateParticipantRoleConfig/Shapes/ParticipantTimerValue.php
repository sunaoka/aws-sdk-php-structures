<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateParticipantRoleConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Unset'|null $ParticipantTimerAction
 * @property int<2, 480>|null $ParticipantTimerDurationInMinutes
 */
class ParticipantTimerValue extends Shape
{
    /**
     * @param array{
     *     ParticipantTimerAction?: 'Unset'|null,
     *     ParticipantTimerDurationInMinutes?: int<2, 480>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
