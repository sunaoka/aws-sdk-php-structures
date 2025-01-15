<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REQUEST_RESPONSE'|'FIRE_AND_FORGET'|null $InvocationType
 */
class PipeTargetStateMachineParameters extends Shape
{
    /**
     * @param array{InvocationType?: 'REQUEST_RESPONSE'|'FIRE_AND_FORGET'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
