<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BatchSize
 * @property MSKAccessCredentials $Credentials
 * @property int $MaximumBatchingWindowInSeconds
 */
class UpdatePipeSourceManagedStreamingKafkaParameters extends Shape
{
    /**
     * @param array{
     *     BatchSize?: int,
     *     Credentials?: MSKAccessCredentials,
     *     MaximumBatchingWindowInSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
