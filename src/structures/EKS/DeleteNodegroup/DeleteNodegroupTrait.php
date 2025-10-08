<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteNodegroup;

trait DeleteNodegroupTrait
{
    /**
     * @param DeleteNodegroupRequest $args
     * @return DeleteNodegroupResponse
     */
    public function deleteNodegroup(DeleteNodegroupRequest $args)
    {
        $result = parent::deleteNodegroup($args->toArray());
        return new DeleteNodegroupResponse($result->toArray());
    }
}
