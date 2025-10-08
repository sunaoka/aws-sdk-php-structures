<?php

namespace Sunaoka\Aws\Structures\Macie2\DeleteAllowList;

trait DeleteAllowListTrait
{
    /**
     * @param DeleteAllowListRequest $args
     * @return DeleteAllowListResponse
     */
    public function deleteAllowList(DeleteAllowListRequest $args)
    {
        $result = parent::deleteAllowList($args->toArray());
        return new DeleteAllowListResponse($result->toArray());
    }
}
