<?php

namespace Sunaoka\Aws\Structures\Omics\GetRunGroup;

trait GetRunGroupTrait
{
    /**
     * @param GetRunGroupRequest $args
     * @return GetRunGroupResponse
     */
    public function getRunGroup(GetRunGroupRequest $args)
    {
        $result = parent::getRunGroup($args->toArray());
        return new GetRunGroupResponse($result->toArray());
    }
}
