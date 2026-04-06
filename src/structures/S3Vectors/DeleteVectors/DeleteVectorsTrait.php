<?php

namespace Sunaoka\Aws\Structures\S3Vectors\DeleteVectors;

trait DeleteVectorsTrait
{
    /**
     * @param DeleteVectorsRequest $args
     * @return DeleteVectorsResponse
     */
    public function deleteVectors(DeleteVectorsRequest $args)
    {
        $result = parent::deleteVectors($args->toArray());
        return new DeleteVectorsResponse($result->toArray());
    }
}
