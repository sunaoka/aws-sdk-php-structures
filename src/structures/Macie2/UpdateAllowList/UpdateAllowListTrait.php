<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateAllowList;

trait UpdateAllowListTrait
{
    /**
     * @param UpdateAllowListRequest $args
     * @return UpdateAllowListResponse
     */
    public function updateAllowList(UpdateAllowListRequest $args)
    {
        $result = parent::updateAllowList($args->toArray());
        return new UpdateAllowListResponse($result->toArray());
    }
}
