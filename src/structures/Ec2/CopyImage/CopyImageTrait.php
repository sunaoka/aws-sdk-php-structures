<?php

namespace Sunaoka\Aws\Structures\Ec2\CopyImage;

trait CopyImageTrait
{
    /**
     * @param CopyImageRequest $args
     * @return CopyImageResponse
     */
    public function copyImage(CopyImageRequest $args)
    {
        $result = parent::copyImage($args->toArray());
        return new CopyImageResponse($result->toArray());
    }
}
