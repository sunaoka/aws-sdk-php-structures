<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayIdentifier
 * @property string $name
 * @property string|null $description
 * @property string $roleArn
 * @property 'MCP' $protocolType
 * @property Shapes\GatewayProtocolConfiguration|null $protocolConfiguration
 * @property 'CUSTOM_JWT'|'AWS_IAM' $authorizerType
 * @property Shapes\AuthorizerConfiguration|null $authorizerConfiguration
 * @property string|null $kmsKeyArn
 * @property 'DEBUG'|null $exceptionLevel
 */
class UpdateGatewayRequest extends Request
{
    /**
     * @param array{
     *     gatewayIdentifier: string,
     *     name: string,
     *     description?: string|null,
     *     roleArn: string,
     *     protocolType: 'MCP',
     *     protocolConfiguration?: Shapes\GatewayProtocolConfiguration|null,
     *     authorizerType: 'CUSTOM_JWT'|'AWS_IAM',
     *     authorizerConfiguration?: Shapes\AuthorizerConfiguration|null,
     *     kmsKeyArn?: string|null,
     *     exceptionLevel?: 'DEBUG'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
