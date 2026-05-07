<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdatePaymentManager;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $paymentManagerId
 * @property string|null $description
 * @property 'CUSTOM_JWT'|'AWS_IAM'|null $authorizerType
 * @property Shapes\AuthorizerConfiguration|null $authorizerConfiguration
 * @property string|null $roleArn
 * @property string|null $clientToken
 */
class UpdatePaymentManagerRequest extends Request
{
    /**
     * @param array{
     *     paymentManagerId: string,
     *     description?: string|null,
     *     authorizerType?: 'CUSTOM_JWT'|'AWS_IAM'|null,
     *     authorizerConfiguration?: Shapes\AuthorizerConfiguration|null,
     *     roleArn?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
