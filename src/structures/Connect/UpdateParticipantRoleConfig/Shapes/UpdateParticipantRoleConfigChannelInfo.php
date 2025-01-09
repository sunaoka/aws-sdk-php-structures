<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateParticipantRoleConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ChatParticipantRoleConfig $Chat
 */
class UpdateParticipantRoleConfigChannelInfo extends Shape
{
    /**
     * @param array{Chat?: ChatParticipantRoleConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
