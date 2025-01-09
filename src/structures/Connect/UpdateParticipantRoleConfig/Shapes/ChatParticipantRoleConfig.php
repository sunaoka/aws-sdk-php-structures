<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateParticipantRoleConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ParticipantTimerConfiguration> $ParticipantTimerConfigList
 */
class ChatParticipantRoleConfig extends Shape
{
    /**
     * @param array{ParticipantTimerConfigList: list<ParticipantTimerConfiguration>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
