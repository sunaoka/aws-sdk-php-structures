<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateRoute;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $ApiGatewayManaged
 * @property bool $ApiKeyRequired
 * @property list<string> $AuthorizationScopes
 * @property 'NONE'|'AWS_IAM'|'CUSTOM'|'JWT' $AuthorizationType
 * @property string $AuthorizerId
 * @property string $ModelSelectionExpression
 * @property string $OperationName
 * @property array<string, string> $RequestModels
 * @property array<string, Shapes\ParameterConstraints> $RequestParameters
 * @property string $RouteId
 * @property string $RouteKey
 * @property string $RouteResponseSelectionExpression
 * @property string $Target
 */
class UpdateRouteResponse extends Response
{
}
