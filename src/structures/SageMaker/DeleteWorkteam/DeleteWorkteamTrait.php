<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteWorkteam;

trait DeleteWorkteamTrait
{
    /**
     * @param DeleteWorkteamRequest $args
     * @return DeleteWorkteamResponse
     */
    public function deleteWorkteam(DeleteWorkteamRequest $args)
    {
        $result = parent::deleteWorkteam($args->toArray());
        return new DeleteWorkteamResponse($result->toArray());
    }
}
