<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateResourcePolicy;

trait UpdateResourcePolicyTrait
{
    /**
     * @param UpdateResourcePolicyRequest $args
     * @return UpdateResourcePolicyResponse
     */
    public function updateResourcePolicy(UpdateResourcePolicyRequest $args)
    {
        $result = parent::updateResourcePolicy($args->toArray());
        return new UpdateResourcePolicyResponse($result->toArray());
    }
}
