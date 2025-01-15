<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateParticipantRoleConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ChatParticipantRoleConfig|null $Chat
 */
class UpdateParticipantRoleConfigChannelInfo extends Shape
{
    /**
     * @param array{Chat?: ChatParticipantRoleConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
