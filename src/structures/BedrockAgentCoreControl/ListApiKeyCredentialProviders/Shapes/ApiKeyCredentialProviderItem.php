<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListApiKeyCredentialProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $credentialProviderArn
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 */
class ApiKeyCredentialProviderItem extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     credentialProviderArn: string,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     lastUpdatedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
