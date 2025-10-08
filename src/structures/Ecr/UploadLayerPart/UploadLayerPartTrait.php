<?php

namespace Sunaoka\Aws\Structures\Ecr\UploadLayerPart;

trait UploadLayerPartTrait
{
    /**
     * @param UploadLayerPartRequest $args
     * @return UploadLayerPartResponse
     */
    public function uploadLayerPart(UploadLayerPartRequest $args)
    {
        $result = parent::uploadLayerPart($args->toArray());
        return new UploadLayerPartResponse($result->toArray());
    }
}
