<?php

namespace Sunaoka\Aws\Structures\GameSparks\CreateStage;

trait CreateStageTrait
{
    /**
     * @param CreateStageRequest $args
     * @return CreateStageResponse
     */
    public function createStage(CreateStageRequest $args)
    {
        $result = parent::createStage($args->toArray());
        return new CreateStageResponse($result->toArray());
    }
}
