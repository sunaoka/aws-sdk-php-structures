<?php

namespace Sunaoka\Aws\Structures\Connect\ListInstanceStorageConfigs;

trait ListInstanceStorageConfigsTrait
{
    /**
     * @param ListInstanceStorageConfigsRequest $args
     * @return ListInstanceStorageConfigsResponse
     */
    public function listInstanceStorageConfigs(ListInstanceStorageConfigsRequest $args)
    {
        $result = parent::listInstanceStorageConfigs($args->toArray());
        return new ListInstanceStorageConfigsResponse($result->toArray());
    }
}
