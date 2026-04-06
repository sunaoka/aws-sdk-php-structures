<?php

namespace Sunaoka\Aws\Structures\S3Vectors\ListVectors;

trait ListVectorsTrait
{
    /**
     * @param ListVectorsRequest $args
     * @return ListVectorsResponse
     */
    public function listVectors(ListVectorsRequest $args)
    {
        $result = parent::listVectors($args->toArray());
        return new ListVectorsResponse($result->toArray());
    }
}
