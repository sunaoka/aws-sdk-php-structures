<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateAutomaticTapeCreationPolicy;

trait UpdateAutomaticTapeCreationPolicyTrait
{
    /**
     * @param UpdateAutomaticTapeCreationPolicyRequest $args
     * @return UpdateAutomaticTapeCreationPolicyResponse
     */
    public function updateAutomaticTapeCreationPolicy(UpdateAutomaticTapeCreationPolicyRequest $args)
    {
        $result = parent::updateAutomaticTapeCreationPolicy($args->toArray());
        return new UpdateAutomaticTapeCreationPolicyResponse($result->toArray());
    }
}
