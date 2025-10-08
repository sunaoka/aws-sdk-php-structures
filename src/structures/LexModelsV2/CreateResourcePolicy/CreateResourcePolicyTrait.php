<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateResourcePolicy;

trait CreateResourcePolicyTrait
{
    /**
     * @param CreateResourcePolicyRequest $args
     * @return CreateResourcePolicyResponse
     */
    public function createResourcePolicy(CreateResourcePolicyRequest $args)
    {
        $result = parent::createResourcePolicy($args->toArray());
        return new CreateResourcePolicyResponse($result->toArray());
    }
}
