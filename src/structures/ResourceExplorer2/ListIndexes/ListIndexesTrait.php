<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListIndexes;

trait ListIndexesTrait
{
    /**
     * @param ListIndexesRequest $args
     * @return ListIndexesResponse
     */
    public function listIndexes(ListIndexesRequest $args)
    {
        $result = parent::listIndexes($args->toArray());
        return new ListIndexesResponse($result->toArray());
    }
}
