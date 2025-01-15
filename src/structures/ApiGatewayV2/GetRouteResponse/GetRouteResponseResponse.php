<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetRouteResponse;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ModelSelectionExpression
 * @property array<string, string>|null $ResponseModels
 * @property array<string, Shapes\ParameterConstraints>|null $ResponseParameters
 * @property string|null $RouteResponseId
 * @property string|null $RouteResponseKey
 */
class GetRouteResponseResponse extends Response
{
}
