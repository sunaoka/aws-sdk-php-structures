<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListCustomModels;

trait ListCustomModelsTrait
{
    /**
     * @param ListCustomModelsRequest $args
     * @return ListCustomModelsResponse
     */
    public function listCustomModels(ListCustomModelsRequest $args)
    {
        $result = parent::listCustomModels($args->toArray());
        return new ListCustomModelsResponse($result->toArray());
    }
}
