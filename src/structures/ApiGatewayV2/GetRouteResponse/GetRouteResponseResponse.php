<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetRouteResponse;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ModelSelectionExpression
 * @property array<string, string> $ResponseModels
 * @property array<string, Shapes\ParameterConstraints> $ResponseParameters
 * @property string $RouteResponseId
 * @property string $RouteResponseKey
 */
class GetRouteResponseResponse extends Response
{
}
