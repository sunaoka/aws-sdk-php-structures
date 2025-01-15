<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\CreateService;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationId
 * @property string|null $Arn
 * @property string|null $CreatedByAccountId
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $Description
 * @property 'LAMBDA'|'URL'|null $EndpointType
 * @property string|null $EnvironmentId
 * @property Shapes\LambdaEndpointInput|null $LambdaEndpoint
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $Name
 * @property string|null $OwnerAccountId
 * @property string|null $ServiceId
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null $State
 * @property array<string, string>|null $Tags
 * @property Shapes\UrlEndpointInput|null $UrlEndpoint
 * @property string|null $VpcId
 */
class CreateServiceResponse extends Response
{
}
