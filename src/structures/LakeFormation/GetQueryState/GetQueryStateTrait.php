<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetQueryState;

trait GetQueryStateTrait
{
    /**
     * @param GetQueryStateRequest $args
     * @return GetQueryStateResponse
     */
    public function getQueryState(GetQueryStateRequest $args)
    {
        $result = parent::getQueryState($args->toArray());
        return new GetQueryStateResponse($result->toArray());
    }
}
