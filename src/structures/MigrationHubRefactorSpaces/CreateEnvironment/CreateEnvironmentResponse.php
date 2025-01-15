<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\CreateEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $Description
 * @property string|null $EnvironmentId
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $Name
 * @property 'TRANSIT_GATEWAY'|'NONE'|null $NetworkFabricType
 * @property string|null $OwnerAccountId
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null $State
 * @property array<string, string>|null $Tags
 */
class CreateEnvironmentResponse extends Response
{
}
