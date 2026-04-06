<?php

namespace Sunaoka\Aws\Structures\Ecr\UpdateImageStorageClass;

trait UpdateImageStorageClassTrait
{
    /**
     * @param UpdateImageStorageClassRequest $args
     * @return UpdateImageStorageClassResponse
     */
    public function updateImageStorageClass(UpdateImageStorageClassRequest $args)
    {
        $result = parent::updateImageStorageClass($args->toArray());
        return new UpdateImageStorageClassResponse($result->toArray());
    }
}
