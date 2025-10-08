<?php

namespace Sunaoka\Aws\Structures\Kms\CancelKeyDeletion;

trait CancelKeyDeletionTrait
{
    /**
     * @param CancelKeyDeletionRequest $args
     * @return CancelKeyDeletionResponse
     */
    public function cancelKeyDeletion(CancelKeyDeletionRequest $args)
    {
        $result = parent::cancelKeyDeletion($args->toArray());
        return new CancelKeyDeletionResponse($result->toArray());
    }
}
