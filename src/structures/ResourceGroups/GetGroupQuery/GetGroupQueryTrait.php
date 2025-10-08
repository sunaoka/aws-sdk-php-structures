<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GetGroupQuery;

trait GetGroupQueryTrait
{
    /**
     * @param GetGroupQueryRequest $args
     * @return GetGroupQueryResponse
     */
    public function getGroupQuery(GetGroupQueryRequest $args)
    {
        $result = parent::getGroupQuery($args->toArray());
        return new GetGroupQueryResponse($result->toArray());
    }
}
