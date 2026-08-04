<?php

namespace Sunaoka\Aws\Structures\DynamoDb\SearchVectors;

trait SearchVectorsTrait
{
    /**
     * @param SearchVectorsRequest $args
     * @return SearchVectorsResponse
     */
    public function searchVectors(SearchVectorsRequest $args)
    {
        $result = parent::searchVectors($args->toArray());
        return new SearchVectorsResponse($result->toArray());
    }
}
