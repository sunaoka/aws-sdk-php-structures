<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListRecipeVersions;

trait ListRecipeVersionsTrait
{
    /**
     * @param ListRecipeVersionsRequest $args
     * @return ListRecipeVersionsResponse
     */
    public function listRecipeVersions(ListRecipeVersionsRequest $args)
    {
        $result = parent::listRecipeVersions($args->toArray());
        return new ListRecipeVersionsResponse($result->toArray());
    }
}
