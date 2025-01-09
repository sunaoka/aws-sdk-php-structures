<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiKeySelectionExpression
 * @property Shapes\Cors $CorsConfiguration
 * @property string $CredentialsArn
 * @property string $Description
 * @property bool $DisableSchemaValidation
 * @property bool $DisableExecuteApiEndpoint
 * @property string $Name
 * @property 'WEBSOCKET'|'HTTP' $ProtocolType
 * @property string $RouteKey
 * @property string $RouteSelectionExpression
 * @property array<string, string> $Tags
 * @property string $Target
 * @property string $Version
 */
class CreateApiRequest extends Request
{
    /**
     * @param array{
     *     ApiKeySelectionExpression?: string,
     *     CorsConfiguration?: Shapes\Cors,
     *     CredentialsArn?: string,
     *     Description?: string,
     *     DisableSchemaValidation?: bool,
     *     DisableExecuteApiEndpoint?: bool,
     *     Name: string,
     *     ProtocolType: 'WEBSOCKET'|'HTTP',
     *     RouteKey?: string,
     *     RouteSelectionExpression?: string,
     *     Tags?: array<string, string>,
     *     Target?: string,
     *     Version?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
