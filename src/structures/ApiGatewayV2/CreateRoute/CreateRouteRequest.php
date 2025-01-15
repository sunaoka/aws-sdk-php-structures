<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property bool|null $ApiKeyRequired
 * @property list<string>|null $AuthorizationScopes
 * @property 'NONE'|'AWS_IAM'|'CUSTOM'|'JWT'|null $AuthorizationType
 * @property string|null $AuthorizerId
 * @property string|null $ModelSelectionExpression
 * @property string|null $OperationName
 * @property array<string, string>|null $RequestModels
 * @property array<string, Shapes\ParameterConstraints>|null $RequestParameters
 * @property string $RouteKey
 * @property string|null $RouteResponseSelectionExpression
 * @property string|null $Target
 */
class CreateRouteRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     ApiKeyRequired?: bool|null,
     *     AuthorizationScopes?: list<string>|null,
     *     AuthorizationType?: 'NONE'|'AWS_IAM'|'CUSTOM'|'JWT'|null,
     *     AuthorizerId?: string|null,
     *     ModelSelectionExpression?: string|null,
     *     OperationName?: string|null,
     *     RequestModels?: array<string, string>|null,
     *     RequestParameters?: array<string, Shapes\ParameterConstraints>|null,
     *     RouteKey: string,
     *     RouteResponseSelectionExpression?: string|null,
     *     Target?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
