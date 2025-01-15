<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateRouteResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string|null $ModelSelectionExpression
 * @property array<string, string>|null $ResponseModels
 * @property array<string, Shapes\ParameterConstraints>|null $ResponseParameters
 * @property string $RouteId
 * @property string $RouteResponseKey
 */
class CreateRouteResponseRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     ModelSelectionExpression?: string|null,
     *     ResponseModels?: array<string, string>|null,
     *     ResponseParameters?: array<string, Shapes\ParameterConstraints>|null,
     *     RouteId: string,
     *     RouteResponseKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
