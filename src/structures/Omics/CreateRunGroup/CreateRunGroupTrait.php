<?php

namespace Sunaoka\Aws\Structures\Omics\CreateRunGroup;

trait CreateRunGroupTrait
{
    /**
     * @param CreateRunGroupRequest $args
     * @return CreateRunGroupResponse
     */
    public function createRunGroup(CreateRunGroupRequest $args)
    {
        $result = parent::createRunGroup($args->toArray());
        return new CreateRunGroupResponse($result->toArray());
    }
}
