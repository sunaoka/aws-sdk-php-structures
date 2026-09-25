<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\RotatePaymentConnectorCredentials;

trait RotatePaymentConnectorCredentialsTrait
{
    /**
     * @param RotatePaymentConnectorCredentialsRequest $args
     * @return RotatePaymentConnectorCredentialsResponse
     */
    public function rotatePaymentConnectorCredentials(RotatePaymentConnectorCredentialsRequest $args)
    {
        $result = parent::rotatePaymentConnectorCredentials($args->toArray());
        return new RotatePaymentConnectorCredentialsResponse($result->toArray());
    }
}
