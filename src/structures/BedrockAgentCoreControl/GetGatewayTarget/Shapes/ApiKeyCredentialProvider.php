<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $providerArn
 * @property string|null $credentialParameterName
 * @property string|null $credentialPrefix
 * @property 'HEADER'|'QUERY_PARAMETER'|null $credentialLocation
 */
class ApiKeyCredentialProvider extends Shape
{
    /**
     * @param array{
     *     providerArn: string,
     *     credentialParameterName?: string|null,
     *     credentialPrefix?: string|null,
     *     credentialLocation?: 'HEADER'|'QUERY_PARAMETER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
