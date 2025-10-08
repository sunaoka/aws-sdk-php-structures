<?php

namespace Sunaoka\Aws\Structures\Kafka\BatchDisassociateScramSecret;

trait BatchDisassociateScramSecretTrait
{
    /**
     * @param BatchDisassociateScramSecretRequest $args
     * @return BatchDisassociateScramSecretResponse
     */
    public function batchDisassociateScramSecret(BatchDisassociateScramSecretRequest $args)
    {
        $result = parent::batchDisassociateScramSecret($args->toArray());
        return new BatchDisassociateScramSecretResponse($result->toArray());
    }
}
