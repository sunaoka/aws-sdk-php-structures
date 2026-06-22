<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\UpdateMicrovmImage;

trait UpdateMicrovmImageTrait
{
    /**
     * @param UpdateMicrovmImageRequest $args
     * @return UpdateMicrovmImageResponse
     */
    public function updateMicrovmImage(UpdateMicrovmImageRequest $args)
    {
        $result = parent::updateMicrovmImage($args->toArray());
        return new UpdateMicrovmImageResponse($result->toArray());
    }
}
