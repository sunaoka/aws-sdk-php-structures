<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateRoute;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $ApiGatewayManaged
 * @property bool|null $ApiKeyRequired
 * @property list<string>|null $AuthorizationScopes
 * @property 'NONE'|'AWS_IAM'|'CUSTOM'|'JWT'|null $AuthorizationType
 * @property string|null $AuthorizerId
 * @property string|null $ModelSelectionExpression
 * @property string|null $OperationName
 * @property array<string, string>|null $RequestModels
 * @property array<string, Shapes\ParameterConstraints>|null $RequestParameters
 * @property string|null $RouteId
 * @property string|null $RouteKey
 * @property string|null $RouteResponseSelectionExpression
 * @property string|null $Target
 */
class CreateRouteResponse extends Response
{
}
