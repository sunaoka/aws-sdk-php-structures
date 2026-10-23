<?php

namespace Sunaoka\Aws\Structures\Continuum\UpdateCollector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $collectorId
 * @property string $collectorArn
 * @property 'AWS_COLLECTOR' $type
 * @property 'ACTIVE'|'PENDING_DELETION' $status
 * @property string|null $configRecorderArn
 * @property string|null $kubernetesClusterRoleArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class UpdateCollectorResponse extends Response
{
}
