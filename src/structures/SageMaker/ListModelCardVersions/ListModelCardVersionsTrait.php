<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelCardVersions;

trait ListModelCardVersionsTrait
{
    /**
     * @param ListModelCardVersionsRequest $args
     * @return ListModelCardVersionsResponse
     */
    public function listModelCardVersions(ListModelCardVersionsRequest $args)
    {
        $result = parent::listModelCardVersions($args->toArray());
        return new ListModelCardVersionsResponse($result->toArray());
    }
}
