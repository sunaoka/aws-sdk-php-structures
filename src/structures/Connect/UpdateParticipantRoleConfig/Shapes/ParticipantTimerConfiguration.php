<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateParticipantRoleConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CUSTOMER'|'AGENT' $ParticipantRole
 * @property 'IDLE'|'DISCONNECT_NONCUSTOMER' $TimerType
 * @property ParticipantTimerValue $TimerValue
 */
class ParticipantTimerConfiguration extends Shape
{
    /**
     * @param array{
     *     ParticipantRole: 'CUSTOMER'|'AGENT',
     *     TimerType: 'IDLE'|'DISCONNECT_NONCUSTOMER',
     *     TimerValue: ParticipantTimerValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
