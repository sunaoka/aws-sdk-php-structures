<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeStateMachine;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stateMachineArn
 */
class DescribeStateMachineRequest extends Request
{
    /**
     * @param array{stateMachineArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
