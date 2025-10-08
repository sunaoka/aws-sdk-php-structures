<?php

namespace Sunaoka\Aws\Structures\SecurityLake\GetDataLakeSources;

trait GetDataLakeSourcesTrait
{
    /**
     * @param GetDataLakeSourcesRequest $args
     * @return GetDataLakeSourcesResponse
     */
    public function getDataLakeSources(GetDataLakeSourcesRequest $args)
    {
        $result = parent::getDataLakeSources($args->toArray());
        return new GetDataLakeSourcesResponse($result->toArray());
    }
}
