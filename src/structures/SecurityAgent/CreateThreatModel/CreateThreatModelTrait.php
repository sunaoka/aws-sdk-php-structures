<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateThreatModel;

trait CreateThreatModelTrait
{
    /**
     * @param CreateThreatModelRequest $args
     * @return CreateThreatModelResponse
     */
    public function createThreatModel(CreateThreatModelRequest $args)
    {
        $result = parent::createThreatModel($args->toArray());
        return new CreateThreatModelResponse($result->toArray());
    }
}
