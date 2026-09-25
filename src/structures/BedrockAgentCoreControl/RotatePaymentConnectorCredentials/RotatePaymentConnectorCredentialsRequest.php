<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\RotatePaymentConnectorCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $paymentManagerId
 * @property string $paymentConnectorId
 * @property Shapes\CredentialRotationConfig $credentialsToRotate
 * @property string|null $clientToken
 */
class RotatePaymentConnectorCredentialsRequest extends Request
{
    /**
     * @param array{
     *     paymentManagerId: string,
     *     paymentConnectorId: string,
     *     credentialsToRotate: Shapes\CredentialRotationConfig,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
