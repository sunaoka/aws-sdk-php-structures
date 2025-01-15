<?php

namespace Sunaoka\Aws\Structures\Braket\GetQuantumTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'QueueInfo'>|null $additionalAttributeNames
 * @property string $quantumTaskArn
 */
class GetQuantumTaskRequest extends Request
{
    /**
     * @param array{
     *     additionalAttributeNames?: list<'QueueInfo'>|null,
     *     quantumTaskArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
