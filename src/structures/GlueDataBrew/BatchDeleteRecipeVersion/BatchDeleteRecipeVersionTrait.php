<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\BatchDeleteRecipeVersion;

trait BatchDeleteRecipeVersionTrait
{
    /**
     * @param BatchDeleteRecipeVersionRequest $args
     * @return BatchDeleteRecipeVersionResponse
     */
    public function batchDeleteRecipeVersion(BatchDeleteRecipeVersionRequest $args)
    {
        $result = parent::batchDeleteRecipeVersion($args->toArray());
        return new BatchDeleteRecipeVersionResponse($result->toArray());
    }
}
