<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateRouteResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $ModelSelectionExpression
 * @property array<string, string> $ResponseModels
 * @property array<string, Shapes\ParameterConstraints> $ResponseParameters
 * @property string $RouteId
 * @property string $RouteResponseId
 * @property string $RouteResponseKey
 */
class UpdateRouteResponseRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     ModelSelectionExpression?: string,
     *     ResponseModels?: array<string, string>,
     *     ResponseParameters?: array<string, Shapes\ParameterConstraints>,
     *     RouteId: string,
     *     RouteResponseId: string,
     *     RouteResponseKey?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
