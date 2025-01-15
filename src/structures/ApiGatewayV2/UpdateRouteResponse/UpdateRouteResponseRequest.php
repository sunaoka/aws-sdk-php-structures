<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateRouteResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string|null $ModelSelectionExpression
 * @property array<string, string>|null $ResponseModels
 * @property array<string, Shapes\ParameterConstraints>|null $ResponseParameters
 * @property string $RouteId
 * @property string $RouteResponseId
 * @property string|null $RouteResponseKey
 */
class UpdateRouteResponseRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     ModelSelectionExpression?: string|null,
     *     ResponseModels?: array<string, string>|null,
     *     ResponseParameters?: array<string, Shapes\ParameterConstraints>|null,
     *     RouteId: string,
     *     RouteResponseId: string,
     *     RouteResponseKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
