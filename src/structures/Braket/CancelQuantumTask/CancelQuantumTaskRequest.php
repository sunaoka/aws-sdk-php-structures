<?php

namespace Sunaoka\Aws\Structures\Braket\CancelQuantumTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $quantumTaskArn
 * @property string $clientToken
 */
class CancelQuantumTaskRequest extends Request
{
    /**
     * @param array{
     *     quantumTaskArn: string,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
