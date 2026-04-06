<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\ListModels;

trait ListModelsTrait
{
    /**
     * @param ListModelsRequest $args
     * @return ListModelsResponse
     */
    public function listModels(ListModelsRequest $args)
    {
        $result = parent::listModels($args->toArray());
        return new ListModelsResponse($result->toArray());
    }
}
