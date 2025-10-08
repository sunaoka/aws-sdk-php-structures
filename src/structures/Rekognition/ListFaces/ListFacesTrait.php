<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListFaces;

trait ListFacesTrait
{
    /**
     * @param ListFacesRequest $args
     * @return ListFacesResponse
     */
    public function listFaces(ListFacesRequest $args)
    {
        $result = parent::listFaces($args->toArray());
        return new ListFacesResponse($result->toArray());
    }
}
