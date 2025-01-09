<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ImportApi;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApiEndpoint
 * @property bool $ApiGatewayManaged
 * @property string $ApiId
 * @property string $ApiKeySelectionExpression
 * @property Shapes\Cors $CorsConfiguration
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string $Description
 * @property bool $DisableSchemaValidation
 * @property bool $DisableExecuteApiEndpoint
 * @property list<string> $ImportInfo
 * @property string $Name
 * @property 'WEBSOCKET'|'HTTP' $ProtocolType
 * @property string $RouteSelectionExpression
 * @property array<string, string> $Tags
 * @property string $Version
 * @property list<string> $Warnings
 */
class ImportApiResponse extends Response
{
}
