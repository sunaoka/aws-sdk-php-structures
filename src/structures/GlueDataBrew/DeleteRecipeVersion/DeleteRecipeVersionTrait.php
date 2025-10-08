<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DeleteRecipeVersion;

trait DeleteRecipeVersionTrait
{
    /**
     * @param DeleteRecipeVersionRequest $args
     * @return DeleteRecipeVersionResponse
     */
    public function deleteRecipeVersion(DeleteRecipeVersionRequest $args)
    {
        $result = parent::deleteRecipeVersion($args->toArray());
        return new DeleteRecipeVersionResponse($result->toArray());
    }
}
