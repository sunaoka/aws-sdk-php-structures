<?php

namespace Sunaoka\Aws\Structures\Kafka\ListScramSecrets;

trait ListScramSecretsTrait
{
    /**
     * @param ListScramSecretsRequest $args
     * @return ListScramSecretsResponse
     */
    public function listScramSecrets(ListScramSecretsRequest $args)
    {
        $result = parent::listScramSecrets($args->toArray());
        return new ListScramSecretsResponse($result->toArray());
    }
}
