<?php

namespace Sunaoka\Aws\Structures\S3Vectors\GetVectors;

trait GetVectorsTrait
{
    /**
     * @param GetVectorsRequest $args
     * @return GetVectorsResponse
     */
    public function getVectors(GetVectorsRequest $args)
    {
        $result = parent::getVectors($args->toArray());
        return new GetVectorsResponse($result->toArray());
    }
}
