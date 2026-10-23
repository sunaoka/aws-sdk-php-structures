<?php

namespace Sunaoka\Aws\Structures\Continuum\UpdateEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $environmentId
 * @property string $environmentArn
 * @property string $name
 * @property 'ACTIVE' $status
 * @property string|null $statusMessage
 * @property \Aws\Api\DateTimeResult $statusUpdatedAt
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property Shapes\EnvironmentConfigurationDetails $configuration
 */
class UpdateEnvironmentResponse extends Response
{
}
