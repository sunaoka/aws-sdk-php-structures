<?php

namespace Sunaoka\Aws\Structures\Kafka\BatchAssociateScramSecret;

trait BatchAssociateScramSecretTrait
{
    /**
     * @param BatchAssociateScramSecretRequest $args
     * @return BatchAssociateScramSecretResponse
     */
    public function batchAssociateScramSecret(BatchAssociateScramSecretRequest $args)
    {
        $result = parent::batchAssociateScramSecret($args->toArray());
        return new BatchAssociateScramSecretResponse($result->toArray());
    }
}
