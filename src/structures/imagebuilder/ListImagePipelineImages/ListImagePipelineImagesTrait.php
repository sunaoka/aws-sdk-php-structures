<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImagePipelineImages;

trait ListImagePipelineImagesTrait
{
    /**
     * @param ListImagePipelineImagesRequest $args
     * @return ListImagePipelineImagesResponse
     */
    public function listImagePipelineImages(ListImagePipelineImagesRequest $args)
    {
        $result = parent::listImagePipelineImages($args->toArray());
        return new ListImagePipelineImagesResponse($result->toArray());
    }
}
