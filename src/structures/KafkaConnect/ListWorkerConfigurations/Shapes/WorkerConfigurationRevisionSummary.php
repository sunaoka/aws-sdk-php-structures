<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListWorkerConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $description
 * @property int $revision
 */
class WorkerConfigurationRevisionSummary extends Shape
{
    /**
     * @param array{
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     revision?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
