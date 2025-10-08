<?php

namespace Sunaoka\Aws\Structures\DAX\DeleteParameterGroup;

trait DeleteParameterGroupTrait
{
    /**
     * @param DeleteParameterGroupRequest $args
     * @return DeleteParameterGroupResponse
     */
    public function deleteParameterGroup(DeleteParameterGroupRequest $args)
    {
        $result = parent::deleteParameterGroup($args->toArray());
        return new DeleteParameterGroupResponse($result->toArray());
    }
}
