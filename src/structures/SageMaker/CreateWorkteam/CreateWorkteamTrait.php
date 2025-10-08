<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateWorkteam;

trait CreateWorkteamTrait
{
    /**
     * @param CreateWorkteamRequest $args
     * @return CreateWorkteamResponse
     */
    public function createWorkteam(CreateWorkteamRequest $args)
    {
        $result = parent::createWorkteam($args->toArray());
        return new CreateWorkteamResponse($result->toArray());
    }
}
