<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListWorkerConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $description
 * @property WorkerConfigurationRevisionSummary $latestRevision
 * @property string $name
 * @property string $workerConfigurationArn
 * @property 'ACTIVE'|'DELETING' $workerConfigurationState
 */
class WorkerConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     latestRevision?: WorkerConfigurationRevisionSummary,
     *     name?: string,
     *     workerConfigurationArn?: string,
     *     workerConfigurationState?: 'ACTIVE'|'DELETING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
