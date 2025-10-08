<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListHubContentVersions;

trait ListHubContentVersionsTrait
{
    /**
     * @param ListHubContentVersionsRequest $args
     * @return ListHubContentVersionsResponse
     */
    public function listHubContentVersions(ListHubContentVersionsRequest $args)
    {
        $result = parent::listHubContentVersions($args->toArray());
        return new ListHubContentVersionsResponse($result->toArray());
    }
}
