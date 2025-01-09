<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetApis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApiEndpoint
 * @property bool $ApiGatewayManaged
 * @property string $ApiId
 * @property string $ApiKeySelectionExpression
 * @property Cors $CorsConfiguration
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string $Description
 * @property bool $DisableSchemaValidation
 * @property bool $DisableExecuteApiEndpoint
 * @property list<string> $ImportInfo
 * @property string $Name
 * @property 'WEBSOCKET'|'HTTP' $ProtocolType
 * @property string $RouteSelectionExpression
 * @property array<string, string> $Tags
 * @property string $Version
 * @property list<string> $Warnings
 */
class Api extends Shape
{
    /**
     * @param array{
     *     ApiEndpoint?: string,
     *     ApiGatewayManaged?: bool,
     *     ApiId?: string,
     *     ApiKeySelectionExpression?: string,
     *     CorsConfiguration?: Cors,
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     DisableSchemaValidation?: bool,
     *     DisableExecuteApiEndpoint?: bool,
     *     ImportInfo?: list<string>,
     *     Name: string,
     *     ProtocolType: 'WEBSOCKET'|'HTTP',
     *     RouteSelectionExpression: string,
     *     Tags?: array<string, string>,
     *     Version?: string,
     *     Warnings?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
