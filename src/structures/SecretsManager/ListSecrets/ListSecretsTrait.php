<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ListSecrets;

trait ListSecretsTrait
{
    /**
     * @param ListSecretsRequest $args
     * @return ListSecretsResponse
     */
    public function listSecrets(ListSecretsRequest $args)
    {
        $result = parent::listSecrets($args->toArray());
        return new ListSecretsResponse($result->toArray());
    }
}
