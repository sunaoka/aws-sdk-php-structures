<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateWorkerConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property Shapes\WorkerConfigurationRevisionSummary|null $latestRevision
 * @property string|null $name
 * @property string|null $workerConfigurationArn
 * @property 'ACTIVE'|'DELETING'|null $workerConfigurationState
 */
class CreateWorkerConfigurationResponse extends Response
{
}
