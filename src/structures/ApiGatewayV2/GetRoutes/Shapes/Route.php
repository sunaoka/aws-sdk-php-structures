<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ApiGatewayManaged
 * @property bool $ApiKeyRequired
 * @property list<string> $AuthorizationScopes
 * @property 'NONE'|'AWS_IAM'|'CUSTOM'|'JWT' $AuthorizationType
 * @property string $AuthorizerId
 * @property string $ModelSelectionExpression
 * @property string $OperationName
 * @property array<string, string> $RequestModels
 * @property array<string, ParameterConstraints> $RequestParameters
 * @property string $RouteId
 * @property string $RouteKey
 * @property string $RouteResponseSelectionExpression
 * @property string $Target
 */
class Route extends Shape
{
    /**
     * @param array{
     *     ApiGatewayManaged?: bool,
     *     ApiKeyRequired?: bool,
     *     AuthorizationScopes?: list<string>,
     *     AuthorizationType?: 'NONE'|'AWS_IAM'|'CUSTOM'|'JWT',
     *     AuthorizerId?: string,
     *     ModelSelectionExpression?: string,
     *     OperationName?: string,
     *     RequestModels?: array<string, string>,
     *     RequestParameters?: array<string, ParameterConstraints>,
     *     RouteId?: string,
     *     RouteKey: string,
     *     RouteResponseSelectionExpression?: string,
     *     Target?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
