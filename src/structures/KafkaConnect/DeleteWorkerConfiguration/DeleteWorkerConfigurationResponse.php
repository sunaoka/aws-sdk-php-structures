<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DeleteWorkerConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $workerConfigurationArn
 * @property 'ACTIVE'|'DELETING'|null $workerConfigurationState
 */
class DeleteWorkerConfigurationResponse extends Response
{
}
