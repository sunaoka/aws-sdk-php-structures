<?php

namespace Sunaoka\Aws\Structures\Continuum\CreateCollector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $collectorId
 * @property string $collectorArn
 * @property 'AWS_COLLECTOR' $type
 * @property 'ACTIVE'|'PENDING_DELETION' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class CreateCollectorResponse extends Response
{
}
