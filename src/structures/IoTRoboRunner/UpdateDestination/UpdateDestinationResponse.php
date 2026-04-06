<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\UpdateDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'ENABLED'|'DISABLED'|'DECOMMISSIONED' $state
 * @property string|null $additionalFixedProperties
 */
class UpdateDestinationResponse extends Response
{
}
