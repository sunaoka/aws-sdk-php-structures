<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListModels;

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
