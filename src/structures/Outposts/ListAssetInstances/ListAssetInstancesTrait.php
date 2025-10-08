<?php

namespace Sunaoka\Aws\Structures\Outposts\ListAssetInstances;

trait ListAssetInstancesTrait
{
    /**
     * @param ListAssetInstancesRequest $args
     * @return ListAssetInstancesResponse
     */
    public function listAssetInstances(ListAssetInstancesRequest $args)
    {
        $result = parent::listAssetInstances($args->toArray());
        return new ListAssetInstancesResponse($result->toArray());
    }
}
