<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\GetDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property string $site
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'ENABLED'|'DISABLED'|'DECOMMISSIONED' $state
 * @property string|null $additionalFixedProperties
 */
class GetDestinationResponse extends Response
{
}
