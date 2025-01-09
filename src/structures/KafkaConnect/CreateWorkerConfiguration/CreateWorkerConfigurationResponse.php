<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateWorkerConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property Shapes\WorkerConfigurationRevisionSummary $latestRevision
 * @property string $name
 * @property string $workerConfigurationArn
 * @property 'ACTIVE'|'DELETING' $workerConfigurationState
 */
class CreateWorkerConfigurationResponse extends Response
{
}
