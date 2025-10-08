<?php

namespace Sunaoka\Aws\Structures\Rekognition\CompareFaces;

trait CompareFacesTrait
{
    /**
     * @param CompareFacesRequest $args
     * @return CompareFacesResponse
     */
    public function compareFaces(CompareFacesRequest $args)
    {
        $result = parent::compareFaces($args->toArray());
        return new CompareFacesResponse($result->toArray());
    }
}
