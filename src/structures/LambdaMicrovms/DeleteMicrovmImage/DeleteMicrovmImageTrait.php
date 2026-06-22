<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\DeleteMicrovmImage;

trait DeleteMicrovmImageTrait
{
    /**
     * @param DeleteMicrovmImageRequest $args
     * @return DeleteMicrovmImageResponse
     */
    public function deleteMicrovmImage(DeleteMicrovmImageRequest $args)
    {
        $result = parent::deleteMicrovmImage($args->toArray());
        return new DeleteMicrovmImageResponse($result->toArray());
    }
}
