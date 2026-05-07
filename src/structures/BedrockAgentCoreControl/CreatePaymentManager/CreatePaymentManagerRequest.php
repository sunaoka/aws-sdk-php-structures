<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreatePaymentManager;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property 'CUSTOM_JWT'|'AWS_IAM' $authorizerType
 * @property Shapes\AuthorizerConfiguration|null $authorizerConfiguration
 * @property string $roleArn
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreatePaymentManagerRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     authorizerType: 'CUSTOM_JWT'|'AWS_IAM',
     *     authorizerConfiguration?: Shapes\AuthorizerConfiguration|null,
     *     roleArn: string,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
