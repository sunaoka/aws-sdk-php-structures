<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ApiKeySelectionExpression
 * @property Shapes\Cors|null $CorsConfiguration
 * @property string|null $CredentialsArn
 * @property string|null $Description
 * @property bool|null $DisableSchemaValidation
 * @property bool|null $DisableExecuteApiEndpoint
 * @property string $Name
 * @property 'WEBSOCKET'|'HTTP' $ProtocolType
 * @property string|null $RouteKey
 * @property string|null $RouteSelectionExpression
 * @property array<string, string>|null $Tags
 * @property string|null $Target
 * @property string|null $Version
 */
class CreateApiRequest extends Request
{
    /**
     * @param array{
     *     ApiKeySelectionExpression?: string|null,
     *     CorsConfiguration?: Shapes\Cors|null,
     *     CredentialsArn?: string|null,
     *     Description?: string|null,
     *     DisableSchemaValidation?: bool|null,
     *     DisableExecuteApiEndpoint?: bool|null,
     *     Name: string,
     *     ProtocolType: 'WEBSOCKET'|'HTTP',
     *     RouteKey?: string|null,
     *     RouteSelectionExpression?: string|null,
     *     Tags?: array<string, string>|null,
     *     Target?: string|null,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
