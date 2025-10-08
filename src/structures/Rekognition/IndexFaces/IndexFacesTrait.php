<?php

namespace Sunaoka\Aws\Structures\Rekognition\IndexFaces;

trait IndexFacesTrait
{
    /**
     * @param IndexFacesRequest $args
     * @return IndexFacesResponse
     */
    public function indexFaces(IndexFacesRequest $args)
    {
        $result = parent::indexFaces($args->toArray());
        return new IndexFacesResponse($result->toArray());
    }
}
