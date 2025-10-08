<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DeleteObjectsOnCancel;

trait DeleteObjectsOnCancelTrait
{
    /**
     * @param DeleteObjectsOnCancelRequest $args
     * @return DeleteObjectsOnCancelResponse
     */
    public function deleteObjectsOnCancel(DeleteObjectsOnCancelRequest $args)
    {
        $result = parent::deleteObjectsOnCancel($args->toArray());
        return new DeleteObjectsOnCancelResponse($result->toArray());
    }
}
