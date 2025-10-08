<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListActionTypes;

trait ListActionTypesTrait
{
    /**
     * @param ListActionTypesRequest $args
     * @return ListActionTypesResponse
     */
    public function listActionTypes(ListActionTypesRequest $args)
    {
        $result = parent::listActionTypes($args->toArray());
        return new ListActionTypesResponse($result->toArray());
    }
}
