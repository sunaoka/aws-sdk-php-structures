<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetApis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApiEndpoint
 * @property bool|null $ApiGatewayManaged
 * @property string|null $ApiId
 * @property string|null $ApiKeySelectionExpression
 * @property Cors|null $CorsConfiguration
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property string|null $Description
 * @property bool|null $DisableSchemaValidation
 * @property bool|null $DisableExecuteApiEndpoint
 * @property list<string>|null $ImportInfo
 * @property 'ipv4'|'dualstack'|null $IpAddressType
 * @property string $Name
 * @property 'WEBSOCKET'|'HTTP' $ProtocolType
 * @property string $RouteSelectionExpression
 * @property array<string, string>|null $Tags
 * @property string|null $Version
 * @property list<string>|null $Warnings
 */
class Api extends Shape
{
    /**
     * @param array{
     *     ApiEndpoint?: string|null,
     *     ApiGatewayManaged?: bool|null,
     *     ApiId?: string|null,
     *     ApiKeySelectionExpression?: string|null,
     *     CorsConfiguration?: Cors|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     DisableSchemaValidation?: bool|null,
     *     DisableExecuteApiEndpoint?: bool|null,
     *     ImportInfo?: list<string>|null,
     *     IpAddressType?: 'ipv4'|'dualstack'|null,
     *     Name: string,
     *     ProtocolType: 'WEBSOCKET'|'HTTP',
     *     RouteSelectionExpression: string,
     *     Tags?: array<string, string>|null,
     *     Version?: string|null,
     *     Warnings?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
