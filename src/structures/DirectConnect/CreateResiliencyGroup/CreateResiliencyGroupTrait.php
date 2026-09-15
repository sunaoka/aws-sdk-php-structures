<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateResiliencyGroup;

trait CreateResiliencyGroupTrait
{
    /**
     * @param CreateResiliencyGroupRequest $args
     * @return CreateResiliencyGroupResponse
     */
    public function createResiliencyGroup(CreateResiliencyGroupRequest $args)
    {
        $result = parent::createResiliencyGroup($args->toArray());
        return new CreateResiliencyGroupResponse($result->toArray());
    }
}
