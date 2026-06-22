<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\GetMicrovmImage;

trait GetMicrovmImageTrait
{
    /**
     * @param GetMicrovmImageRequest $args
     * @return GetMicrovmImageResponse
     */
    public function getMicrovmImage(GetMicrovmImageRequest $args)
    {
        $result = parent::getMicrovmImage($args->toArray());
        return new GetMicrovmImageResponse($result->toArray());
    }
}
