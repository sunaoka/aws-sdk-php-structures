<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetRouteResponses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelSelectionExpression
 * @property array<string, string>|null $ResponseModels
 * @property array<string, ParameterConstraints>|null $ResponseParameters
 * @property string|null $RouteResponseId
 * @property string $RouteResponseKey
 */
class RouteResponse extends Shape
{
    /**
     * @param array{
     *     ModelSelectionExpression?: string|null,
     *     ResponseModels?: array<string, string>|null,
     *     ResponseParameters?: array<string, ParameterConstraints>|null,
     *     RouteResponseId?: string|null,
     *     RouteResponseKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
