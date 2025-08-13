<?php

namespace Sunaoka\Aws\Structures\Braket\GetQuantumTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $quantumTaskArn
 * @property list<'QueueInfo'>|null $additionalAttributeNames
 */
class GetQuantumTaskRequest extends Request
{
    /**
     * @param array{
     *     quantumTaskArn: string,
     *     additionalAttributeNames?: list<'QueueInfo'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
