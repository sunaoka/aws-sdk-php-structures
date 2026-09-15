<?php

namespace Sunaoka\Aws\Structures\DirectConnect\GetResiliencyGroup;

trait GetResiliencyGroupTrait
{
    /**
     * @param GetResiliencyGroupRequest $args
     * @return GetResiliencyGroupResponse
     */
    public function getResiliencyGroup(GetResiliencyGroupRequest $args)
    {
        $result = parent::getResiliencyGroup($args->toArray());
        return new GetResiliencyGroupResponse($result->toArray());
    }
}
