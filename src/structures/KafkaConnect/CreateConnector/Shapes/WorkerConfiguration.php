<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $revision
 * @property string $workerConfigurationArn
 */
class WorkerConfiguration extends Shape
{
    /**
     * @param array{
     *     revision: int,
     *     workerConfigurationArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
