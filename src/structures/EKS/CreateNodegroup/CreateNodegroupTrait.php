<?php

namespace Sunaoka\Aws\Structures\EKS\CreateNodegroup;

trait CreateNodegroupTrait
{
    /**
     * @param CreateNodegroupRequest $args
     * @return CreateNodegroupResponse
     */
    public function createNodegroup(CreateNodegroupRequest $args)
    {
        $result = parent::createNodegroup($args->toArray());
        return new CreateNodegroupResponse($result->toArray());
    }
}
