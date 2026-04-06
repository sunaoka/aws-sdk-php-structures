<?php

namespace Sunaoka\Aws\Structures\Braket\GetQuantumTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $quantumTaskArn
 */
class GetQuantumTaskRequest extends Request
{
    /**
     * @param array{quantumTaskArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
