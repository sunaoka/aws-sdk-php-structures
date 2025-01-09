<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\CreateEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $Description
 * @property string $EnvironmentId
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $Name
 * @property 'TRANSIT_GATEWAY'|'NONE' $NetworkFabricType
 * @property string $OwnerAccountId
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED' $State
 * @property array<string, string> $Tags
 */
class CreateEnvironmentResponse extends Response
{
}
