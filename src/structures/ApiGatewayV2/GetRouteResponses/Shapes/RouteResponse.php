<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetRouteResponses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelSelectionExpression
 * @property array<string, string> $ResponseModels
 * @property array<string, ParameterConstraints> $ResponseParameters
 * @property string $RouteResponseId
 * @property string $RouteResponseKey
 */
class RouteResponse extends Shape
{
    /**
     * @param array{
     *     ModelSelectionExpression?: string,
     *     ResponseModels?: array<string, string>,
     *     ResponseParameters?: array<string, ParameterConstraints>,
     *     RouteResponseId?: string,
     *     RouteResponseKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
