<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\CreateApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ApiGatewayProxyInput|null $ApiGatewayProxy
 * @property string|null $ApplicationId
 * @property string|null $Arn
 * @property string|null $CreatedByAccountId
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $EnvironmentId
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $Name
 * @property string|null $OwnerAccountId
 * @property 'API_GATEWAY'|null $ProxyType
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|null $State
 * @property array<string, string>|null $Tags
 * @property string|null $VpcId
 */
class CreateApplicationResponse extends Response
{
}
