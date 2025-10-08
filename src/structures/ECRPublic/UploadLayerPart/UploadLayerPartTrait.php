<?php

namespace Sunaoka\Aws\Structures\ECRPublic\UploadLayerPart;

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
