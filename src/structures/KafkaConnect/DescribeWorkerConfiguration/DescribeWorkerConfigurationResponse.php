<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeWorkerConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $description
 * @property Shapes\WorkerConfigurationRevisionDescription $latestRevision
 * @property string $name
 * @property string $workerConfigurationArn
 * @property 'ACTIVE'|'DELETING' $workerConfigurationState
 */
class DescribeWorkerConfigurationResponse extends Response
{
}
