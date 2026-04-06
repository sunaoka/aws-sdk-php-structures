<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeWorkerConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $description
 * @property Shapes\WorkerConfigurationRevisionDescription|null $latestRevision
 * @property string|null $name
 * @property string|null $workerConfigurationArn
 */
class DescribeWorkerConfigurationResponse extends Response
{
}
