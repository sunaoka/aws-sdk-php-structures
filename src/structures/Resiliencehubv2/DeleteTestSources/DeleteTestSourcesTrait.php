<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\DeleteTestSources;

trait DeleteTestSourcesTrait
{
    /**
     * @param DeleteTestSourcesRequest $args
     * @return DeleteTestSourcesResponse
     */
    public function deleteTestSources(DeleteTestSourcesRequest $args)
    {
        $result = parent::deleteTestSources($args->toArray());
        return new DeleteTestSourcesResponse($result->toArray());
    }
}
