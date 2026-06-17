<?php

namespace Sunaoka\Aws\Structures\Glue\ListAssetTypes;

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
