<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListClusterExtensions;

trait ListClusterExtensionsTrait
{
    /**
     * @param ListClusterExtensionsRequest $args
     * @return ListClusterExtensionsResponse
     */
    public function listClusterExtensions(ListClusterExtensionsRequest $args)
    {
        $result = parent::listClusterExtensions($args->toArray());
        return new ListClusterExtensionsResponse($result->toArray());
    }
}
