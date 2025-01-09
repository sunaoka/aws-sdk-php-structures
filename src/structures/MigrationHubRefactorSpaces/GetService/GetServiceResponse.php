<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\GetService;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationId
 * @property string $Arn
 * @property string $CreatedByAccountId
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $Description
 * @property 'LAMBDA'|'URL' $EndpointType
 * @property string $EnvironmentId
 * @property Shapes\ErrorResponse $Error
 * @property Shapes\LambdaEndpointConfig $LambdaEndpoint
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $Name
 * @property string $OwnerAccountId
 * @property string $ServiceId
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED' $State
 * @property array<string, string> $Tags
 * @property Shapes\UrlEndpointConfig $UrlEndpoint
 * @property string $VpcId
 */
class GetServiceResponse extends Response
{
}
