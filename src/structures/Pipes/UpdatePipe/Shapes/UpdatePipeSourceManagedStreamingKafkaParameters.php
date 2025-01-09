<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10000> $BatchSize
 * @property MSKAccessCredentials $Credentials
 * @property int<0, 300> $MaximumBatchingWindowInSeconds
 */
class UpdatePipeSourceManagedStreamingKafkaParameters extends Shape
{
    /**
     * @param array{
     *     BatchSize?: int<1, 10000>,
     *     Credentials?: MSKAccessCredentials,
     *     MaximumBatchingWindowInSeconds?: int<0, 300>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
