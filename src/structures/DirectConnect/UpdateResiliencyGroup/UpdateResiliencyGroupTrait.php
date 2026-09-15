<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateResiliencyGroup;

trait UpdateResiliencyGroupTrait
{
    /**
     * @param UpdateResiliencyGroupRequest $args
     * @return UpdateResiliencyGroupResponse
     */
    public function updateResiliencyGroup(UpdateResiliencyGroupRequest $args)
    {
        $result = parent::updateResiliencyGroup($args->toArray());
        return new UpdateResiliencyGroupResponse($result->toArray());
    }
}
