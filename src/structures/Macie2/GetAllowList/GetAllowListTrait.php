<?php

namespace Sunaoka\Aws\Structures\Macie2\GetAllowList;

trait GetAllowListTrait
{
    /**
     * @param GetAllowListRequest $args
     * @return GetAllowListResponse
     */
    public function getAllowList(GetAllowListRequest $args)
    {
        $result = parent::getAllowList($args->toArray());
        return new GetAllowListResponse($result->toArray());
    }
}
