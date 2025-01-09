<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\CreateApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ApiGatewayProxyInput $ApiGatewayProxy
 * @property string $ApplicationId
 * @property string $Arn
 * @property string $CreatedByAccountId
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $EnvironmentId
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $Name
 * @property string $OwnerAccountId
 * @property 'API_GATEWAY' $ProxyType
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING' $State
 * @property array<string, string> $Tags
 * @property string $VpcId
 */
class CreateApplicationResponse extends Response
{
}
