<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListImageVersions;

trait ListImageVersionsTrait
{
    /**
     * @param ListImageVersionsRequest $args
     * @return ListImageVersionsResponse
     */
    public function listImageVersions(ListImageVersionsRequest $args)
    {
        $result = parent::listImageVersions($args->toArray());
        return new ListImageVersionsResponse($result->toArray());
    }
}
