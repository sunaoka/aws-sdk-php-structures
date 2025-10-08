<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectFaces;

trait DetectFacesTrait
{
    /**
     * @param DetectFacesRequest $args
     * @return DetectFacesResponse
     */
    public function detectFaces(DetectFacesRequest $args)
    {
        $result = parent::detectFaces($args->toArray());
        return new DetectFacesResponse($result->toArray());
    }
}
