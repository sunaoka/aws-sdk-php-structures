<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ReimportApi;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApiEndpoint
 * @property bool|null $ApiGatewayManaged
 * @property string|null $ApiId
 * @property string|null $ApiKeySelectionExpression
 * @property Shapes\Cors|null $CorsConfiguration
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property string|null $Description
 * @property bool|null $DisableSchemaValidation
 * @property bool|null $DisableExecuteApiEndpoint
 * @property list<string>|null $ImportInfo
 * @property 'ipv4'|'dualstack'|null $IpAddressType
 * @property string|null $Name
 * @property 'WEBSOCKET'|'HTTP'|null $ProtocolType
 * @property string|null $RouteSelectionExpression
 * @property array<string, string>|null $Tags
 * @property string|null $Version
 * @property list<string>|null $Warnings
 */
class ReimportApiResponse extends Response
{
}
