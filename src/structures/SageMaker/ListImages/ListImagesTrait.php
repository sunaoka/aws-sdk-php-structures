<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListImages;

trait ListImagesTrait
{
    /**
     * @param ListImagesRequest $args
     * @return ListImagesResponse
     */
    public function listImages(ListImagesRequest $args)
    {
        $result = parent::listImages($args->toArray());
        return new ListImagesResponse($result->toArray());
    }
}
