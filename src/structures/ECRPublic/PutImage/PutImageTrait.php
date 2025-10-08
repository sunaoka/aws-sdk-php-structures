<?php

namespace Sunaoka\Aws\Structures\ECRPublic\PutImage;

trait PutImageTrait
{
    /**
     * @param PutImageRequest $args
     * @return PutImageResponse
     */
    public function putImage(PutImageRequest $args)
    {
        $result = parent::putImage($args->toArray());
        return new PutImageResponse($result->toArray());
    }
}
