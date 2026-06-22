<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\ListMicrovmImages;

trait ListMicrovmImagesTrait
{
    /**
     * @param ListMicrovmImagesRequest $args
     * @return ListMicrovmImagesResponse
     */
    public function listMicrovmImages(ListMicrovmImagesRequest $args)
    {
        $result = parent::listMicrovmImages($args->toArray());
        return new ListMicrovmImagesResponse($result->toArray());
    }
}
