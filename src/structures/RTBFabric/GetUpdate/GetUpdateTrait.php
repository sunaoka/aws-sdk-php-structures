<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetUpdate;

trait GetUpdateTrait
{
    /**
     * @param GetUpdateRequest $args
     * @return GetUpdateResponse
     */
    public function getUpdate(GetUpdateRequest $args)
    {
        $result = parent::getUpdate($args->toArray());
        return new GetUpdateResponse($result->toArray());
    }
}
