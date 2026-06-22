<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\CreateMicrovmImage;

trait CreateMicrovmImageTrait
{
    /**
     * @param CreateMicrovmImageRequest $args
     * @return CreateMicrovmImageResponse
     */
    public function createMicrovmImage(CreateMicrovmImageRequest $args)
    {
        $result = parent::createMicrovmImage($args->toArray());
        return new CreateMicrovmImageResponse($result->toArray());
    }
}
