<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListClusterExtensionVersions;

trait ListClusterExtensionVersionsTrait
{
    /**
     * @param ListClusterExtensionVersionsRequest $args
     * @return ListClusterExtensionVersionsResponse
     */
    public function listClusterExtensionVersions(ListClusterExtensionVersionsRequest $args)
    {
        $result = parent::listClusterExtensionVersions($args->toArray());
        return new ListClusterExtensionVersionsResponse($result->toArray());
    }
}
