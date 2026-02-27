<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUserPoolClientSecrets;

trait ListUserPoolClientSecretsTrait
{
    /**
     * @param ListUserPoolClientSecretsRequest $args
     * @return ListUserPoolClientSecretsResponse
     */
    public function listUserPoolClientSecrets(ListUserPoolClientSecretsRequest $args)
    {
        $result = parent::listUserPoolClientSecrets($args->toArray());
        return new ListUserPoolClientSecretsResponse($result->toArray());
    }
}
