<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
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
class UpdateRouteRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     ApiKeyRequired?: bool,
     *     AuthorizationScopes?: list<string>,
     *     AuthorizationType?: 'NONE'|'AWS_IAM'|'CUSTOM'|'JWT',
     *     AuthorizerId?: string,
     *     ModelSelectionExpression?: string,
     *     OperationName?: string,
     *     RequestModels?: array<string, string>,
     *     RequestParameters?: array<string, Shapes\ParameterConstraints>,
     *     RouteId: string,
     *     RouteKey?: string,
     *     RouteResponseSelectionExpression?: string,
     *     Target?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
