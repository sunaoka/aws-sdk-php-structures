<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\GetApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ApiGatewayProxyConfig|null $ApiGatewayProxy
 * @property string|null $ApplicationId
 * @property string|null $Arn
 * @property string|null $CreatedByAccountId
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $EnvironmentId
 * @property Shapes\ErrorResponse|null $Error
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $Name
 * @property string|null $OwnerAccountId
 * @property 'API_GATEWAY'|null $ProxyType
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|null $State
 * @property array<string, string>|null $Tags
 * @property string|null $VpcId
 */
class GetApplicationResponse extends Response
{
}
