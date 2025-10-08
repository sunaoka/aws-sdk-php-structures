<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DeleteAutomaticTapeCreationPolicy;

trait DeleteAutomaticTapeCreationPolicyTrait
{
    /**
     * @param DeleteAutomaticTapeCreationPolicyRequest $args
     * @return DeleteAutomaticTapeCreationPolicyResponse
     */
    public function deleteAutomaticTapeCreationPolicy(DeleteAutomaticTapeCreationPolicyRequest $args)
    {
        $result = parent::deleteAutomaticTapeCreationPolicy($args->toArray());
        return new DeleteAutomaticTapeCreationPolicyResponse($result->toArray());
    }
}
