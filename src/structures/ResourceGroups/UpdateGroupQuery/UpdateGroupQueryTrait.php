<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\UpdateGroupQuery;

trait UpdateGroupQueryTrait
{
    /**
     * @param UpdateGroupQueryRequest $args
     * @return UpdateGroupQueryResponse
     */
    public function updateGroupQuery(UpdateGroupQueryRequest $args)
    {
        $result = parent::updateGroupQuery($args->toArray());
        return new UpdateGroupQueryResponse($result->toArray());
    }
}
