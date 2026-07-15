<?php

namespace Sunaoka\Aws\Structures\HealthLake\UpdateProfileWithAgent;

trait UpdateProfileWithAgentTrait
{
    /**
     * @param UpdateProfileWithAgentRequest $args
     * @return UpdateProfileWithAgentResponse
     */
    public function updateProfileWithAgent(UpdateProfileWithAgentRequest $args)
    {
        $result = parent::updateProfileWithAgent($args->toArray());
        return new UpdateProfileWithAgentResponse($result->toArray());
    }
}
