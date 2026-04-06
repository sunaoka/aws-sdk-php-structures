<?php

namespace Sunaoka\Aws\Structures\S3Vectors\PutVectors;

trait PutVectorsTrait
{
    /**
     * @param PutVectorsRequest $args
     * @return PutVectorsResponse
     */
    public function putVectors(PutVectorsRequest $args)
    {
        $result = parent::putVectors($args->toArray());
        return new PutVectorsResponse($result->toArray());
    }
}
