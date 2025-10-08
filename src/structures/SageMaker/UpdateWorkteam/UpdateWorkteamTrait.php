<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateWorkteam;

trait UpdateWorkteamTrait
{
    /**
     * @param UpdateWorkteamRequest $args
     * @return UpdateWorkteamResponse
     */
    public function updateWorkteam(UpdateWorkteamRequest $args)
    {
        $result = parent::updateWorkteam($args->toArray());
        return new UpdateWorkteamResponse($result->toArray());
    }
}
