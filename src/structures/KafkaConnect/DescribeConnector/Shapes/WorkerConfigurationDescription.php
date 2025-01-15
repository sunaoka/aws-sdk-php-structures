<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $revision
 * @property string|null $workerConfigurationArn
 */
class WorkerConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     revision?: int|null,
     *     workerConfigurationArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
