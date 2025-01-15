<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\GetEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $Description
 * @property string|null $EnvironmentId
 * @property Shapes\ErrorResponse|null $Error
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $Name
 * @property 'TRANSIT_GATEWAY'|'NONE'|null $NetworkFabricType
 * @property string|null $OwnerAccountId
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null $State
 * @property array<string, string>|null $Tags
 * @property string|null $TransitGatewayId
 */
class GetEnvironmentResponse extends Response
{
}
