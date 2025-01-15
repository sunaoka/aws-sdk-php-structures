<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListWorkerConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $description
 * @property int|null $revision
 */
class WorkerConfigurationRevisionSummary extends Shape
{
    /**
     * @param array{
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     revision?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
