<?php

namespace Sunaoka\Aws\Structures\Rekognition\DeleteFaces;

trait DeleteFacesTrait
{
    /**
     * @param DeleteFacesRequest $args
     * @return DeleteFacesResponse
     */
    public function deleteFaces(DeleteFacesRequest $args)
    {
        $result = parent::deleteFaces($args->toArray());
        return new DeleteFacesResponse($result->toArray());
    }
}
