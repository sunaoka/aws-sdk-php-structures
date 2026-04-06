<?php

namespace Sunaoka\Aws\Structures\Braket\CancelQuantumTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $quantumTaskArn
 */
class CancelQuantumTaskRequest extends Request
{
    /**
     * @param array{
     *     clientToken: string,
     *     quantumTaskArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
