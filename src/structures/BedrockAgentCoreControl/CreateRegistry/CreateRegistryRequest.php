<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateRegistry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property 'CUSTOM_JWT'|'AWS_IAM'|null $authorizerType
 * @property Shapes\AuthorizerConfiguration|null $authorizerConfiguration
 * @property string|null $clientToken
 * @property Shapes\ApprovalConfiguration|null $approvalConfiguration
 */
class CreateRegistryRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     authorizerType?: 'CUSTOM_JWT'|'AWS_IAM'|null,
     *     authorizerConfiguration?: Shapes\AuthorizerConfiguration|null,
     *     clientToken?: string|null,
     *     approvalConfiguration?: Shapes\ApprovalConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
