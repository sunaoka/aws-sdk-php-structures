<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'CAN_RECEIVE_MODEL_OUTPUT'|'CAN_RECEIVE_INFERENCE_OUTPUT'> $customMLMemberAbilities
 */
class MLMemberAbilities extends Shape
{
    /**
     * @param array{customMLMemberAbilities: list<'CAN_RECEIVE_MODEL_OUTPUT'|'CAN_RECEIVE_INFERENCE_OUTPUT'>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
