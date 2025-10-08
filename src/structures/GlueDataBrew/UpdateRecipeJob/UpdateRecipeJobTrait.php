<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateRecipeJob;

trait UpdateRecipeJobTrait
{
    /**
     * @param UpdateRecipeJobRequest $args
     * @return UpdateRecipeJobResponse
     */
    public function updateRecipeJob(UpdateRecipeJobRequest $args)
    {
        $result = parent::updateRecipeJob($args->toArray());
        return new UpdateRecipeJobResponse($result->toArray());
    }
}
