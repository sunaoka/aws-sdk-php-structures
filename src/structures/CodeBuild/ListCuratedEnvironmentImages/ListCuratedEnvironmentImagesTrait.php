<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListCuratedEnvironmentImages;

trait ListCuratedEnvironmentImagesTrait
{
    /**
     * @param ListCuratedEnvironmentImagesRequest $args
     * @return ListCuratedEnvironmentImagesResponse
     */
    public function listCuratedEnvironmentImages(ListCuratedEnvironmentImagesRequest $args)
    {
        $result = parent::listCuratedEnvironmentImages($args->toArray());
        return new ListCuratedEnvironmentImagesResponse($result->toArray());
    }
}
