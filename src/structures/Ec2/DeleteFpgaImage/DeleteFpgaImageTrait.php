<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteFpgaImage;

trait DeleteFpgaImageTrait
{
    /**
     * @param DeleteFpgaImageRequest $args
     * @return DeleteFpgaImageResponse
     */
    public function deleteFpgaImage(DeleteFpgaImageRequest $args)
    {
        $result = parent::deleteFpgaImage($args->toArray());
        return new DeleteFpgaImageResponse($result->toArray());
    }
}
