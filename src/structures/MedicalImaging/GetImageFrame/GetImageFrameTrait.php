<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\GetImageFrame;

trait GetImageFrameTrait
{
    /**
     * @param GetImageFrameRequest $args
     * @return GetImageFrameResponse
     */
    public function getImageFrame(GetImageFrameRequest $args)
    {
        $result = parent::getImageFrame($args->toArray());
        return new GetImageFrameResponse($result->toArray());
    }
}
