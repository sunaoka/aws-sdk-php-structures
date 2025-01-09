<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\CreateService;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationId
 * @property string $Arn
 * @property string $CreatedByAccountId
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $Description
 * @property 'LAMBDA'|'URL' $EndpointType
 * @property string $EnvironmentId
 * @property Shapes\LambdaEndpointInput $LambdaEndpoint
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $Name
 * @property string $OwnerAccountId
 * @property string $ServiceId
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED' $State
 * @property array<string, string> $Tags
 * @property Shapes\UrlEndpointInput $UrlEndpoint
 * @property string $VpcId
 */
class CreateServiceResponse extends Response
{
}
