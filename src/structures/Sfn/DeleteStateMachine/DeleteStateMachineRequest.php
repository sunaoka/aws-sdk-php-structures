<?php

namespace Sunaoka\Aws\Structures\Sfn\DeleteStateMachine;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stateMachineArn
 */
class DeleteStateMachineRequest extends Request
{
    /**
     * @param array{stateMachineArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
