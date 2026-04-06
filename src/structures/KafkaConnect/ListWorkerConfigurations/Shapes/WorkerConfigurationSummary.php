<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListWorkerConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $description
 * @property WorkerConfigurationRevisionSummary|null $latestRevision
 * @property string|null $name
 * @property string|null $workerConfigurationArn
 * @property 'ACTIVE'|'DELETING'|null $workerConfigurationState
 */
class WorkerConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     latestRevision?: WorkerConfigurationRevisionSummary|null,
     *     name?: string|null,
     *     workerConfigurationArn?: string|null,
     *     workerConfigurationState?: 'ACTIVE'|'DELETING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
