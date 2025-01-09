<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $revision
 * @property string $workerConfigurationArn
 */
class WorkerConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     revision?: int,
     *     workerConfigurationArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
