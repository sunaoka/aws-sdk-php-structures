<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 9223372036854775807> $revision
 * @property string $workerConfigurationArn
 */
class WorkerConfiguration extends Shape
{
    /**
     * @param array{
     *     revision: int<1, 9223372036854775807>,
     *     workerConfigurationArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
