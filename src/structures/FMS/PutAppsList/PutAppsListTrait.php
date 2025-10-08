<?php

namespace Sunaoka\Aws\Structures\FMS\PutAppsList;

trait PutAppsListTrait
{
    /**
     * @param PutAppsListRequest $args
     * @return PutAppsListResponse
     */
    public function putAppsList(PutAppsListRequest $args)
    {
        $result = parent::putAppsList($args->toArray());
        return new PutAppsListResponse($result->toArray());
    }
}
