<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListServiceIndexes;

trait ListServiceIndexesTrait
{
    /**
     * @param ListServiceIndexesRequest $args
     * @return ListServiceIndexesResponse
     */
    public function listServiceIndexes(ListServiceIndexesRequest $args)
    {
        $result = parent::listServiceIndexes($args->toArray());
        return new ListServiceIndexesResponse($result->toArray());
    }
}
