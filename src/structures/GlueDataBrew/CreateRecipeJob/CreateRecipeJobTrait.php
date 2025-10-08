<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateRecipeJob;

trait CreateRecipeJobTrait
{
    /**
     * @param CreateRecipeJobRequest $args
     * @return CreateRecipeJobResponse
     */
    public function createRecipeJob(CreateRecipeJobRequest $args)
    {
        $result = parent::createRecipeJob($args->toArray());
        return new CreateRecipeJobResponse($result->toArray());
    }
}
