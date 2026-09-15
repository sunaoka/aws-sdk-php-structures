<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DeleteResiliencyGroup;

trait DeleteResiliencyGroupTrait
{
    /**
     * @param DeleteResiliencyGroupRequest $args
     * @return DeleteResiliencyGroupResponse
     */
    public function deleteResiliencyGroup(DeleteResiliencyGroupRequest $args)
    {
        $result = parent::deleteResiliencyGroup($args->toArray());
        return new DeleteResiliencyGroupResponse($result->toArray());
    }
}
