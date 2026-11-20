<?php

namespace Sunaoka\Aws\Structures\Route53\CreateHealthCheckSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $HealthCheckSourceId
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_COMPLETED'|'CREATE_FAILED'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETED'|'DELETE_FAILED' $HealthCheckSourceStatus
 * @property string $Location
 */
class CreateHealthCheckSourceResponse extends Response
{
}
