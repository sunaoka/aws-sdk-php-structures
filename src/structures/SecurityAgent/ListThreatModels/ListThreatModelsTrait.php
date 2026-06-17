<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListThreatModels;

trait ListThreatModelsTrait
{
    /**
     * @param ListThreatModelsRequest $args
     * @return ListThreatModelsResponse
     */
    public function listThreatModels(ListThreatModelsRequest $args)
    {
        $result = parent::listThreatModels($args->toArray());
        return new ListThreatModelsResponse($result->toArray());
    }
}
