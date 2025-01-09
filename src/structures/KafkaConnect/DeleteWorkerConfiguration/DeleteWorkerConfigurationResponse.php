<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DeleteWorkerConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $workerConfigurationArn
 * @property 'ACTIVE'|'DELETING' $workerConfigurationState
 */
class DeleteWorkerConfigurationResponse extends Response
{
}
