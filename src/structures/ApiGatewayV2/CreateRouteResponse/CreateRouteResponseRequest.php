<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateRouteResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $ModelSelectionExpression
 * @property array<string, string> $ResponseModels
 * @property array<string, Shapes\ParameterConstraints> $ResponseParameters
 * @property string $RouteId
 * @property string $RouteResponseKey
 */
class CreateRouteResponseRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     ModelSelectionExpression?: string,
     *     ResponseModels?: array<string, string>,
     *     ResponseParameters?: array<string, Shapes\ParameterConstraints>,
     *     RouteId: string,
     *     RouteResponseKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
