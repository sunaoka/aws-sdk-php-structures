<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Description
 * @property string|null $DeliveryDestinationArn
 * @property 'KINESIS'|null $DeliveryDestinationType
 * @property string|null $Name
 * @property string|null $RoleArn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property array<string, string>|null $Tags
 */
class GetDestinationResponse extends Response
{
}
