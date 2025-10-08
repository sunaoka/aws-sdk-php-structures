<?php

namespace Sunaoka\Aws\Structures\Ec2\CopyFpgaImage;

trait CopyFpgaImageTrait
{
    /**
     * @param CopyFpgaImageRequest $args
     * @return CopyFpgaImageResponse
     */
    public function copyFpgaImage(CopyFpgaImageRequest $args)
    {
        $result = parent::copyFpgaImage($args->toArray());
        return new CopyFpgaImageResponse($result->toArray());
    }
}
