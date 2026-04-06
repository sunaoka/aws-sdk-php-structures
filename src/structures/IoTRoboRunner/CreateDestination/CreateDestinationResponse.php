<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\CreateDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'ENABLED'|'DISABLED'|'DECOMMISSIONED' $state
 */
class CreateDestinationResponse extends Response
{
}
