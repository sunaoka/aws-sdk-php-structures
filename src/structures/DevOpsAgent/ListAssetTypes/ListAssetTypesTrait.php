<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListAssetTypes;

trait ListAssetTypesTrait
{
    /**
     * @param ListAssetTypesRequest $args
     * @return ListAssetTypesResponse
     */
    public function listAssetTypes(ListAssetTypesRequest $args)
    {
        $result = parent::listAssetTypes($args->toArray());
        return new ListAssetTypesResponse($result->toArray());
    }
}
