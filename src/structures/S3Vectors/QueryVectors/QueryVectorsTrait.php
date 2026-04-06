<?php

namespace Sunaoka\Aws\Structures\S3Vectors\QueryVectors;

trait QueryVectorsTrait
{
    /**
     * @param QueryVectorsRequest $args
     * @return QueryVectorsResponse
     */
    public function queryVectors(QueryVectorsRequest $args)
    {
        $result = parent::queryVectors($args->toArray());
        return new QueryVectorsResponse($result->toArray());
    }
}
