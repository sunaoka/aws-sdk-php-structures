<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $clientToken
 * @property string $roleArn
 * @property 'MCP' $protocolType
 * @property Shapes\GatewayProtocolConfiguration|null $protocolConfiguration
 * @property 'CUSTOM_JWT' $authorizerType
 * @property Shapes\AuthorizerConfiguration $authorizerConfiguration
 * @property string|null $kmsKeyArn
 * @property 'DEBUG'|null $exceptionLevel
 * @property array<string, string>|null $tags
 */
class CreateGatewayRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     clientToken?: string|null,
     *     roleArn: string,
     *     protocolType: 'MCP',
     *     protocolConfiguration?: Shapes\GatewayProtocolConfiguration|null,
     *     authorizerType: 'CUSTOM_JWT',
     *     authorizerConfiguration: Shapes\AuthorizerConfiguration,
     *     kmsKeyArn?: string|null,
     *     exceptionLevel?: 'DEBUG'|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
