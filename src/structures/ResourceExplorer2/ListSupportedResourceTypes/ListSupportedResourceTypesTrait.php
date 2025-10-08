<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListSupportedResourceTypes;

trait ListSupportedResourceTypesTrait
{
    /**
     * @param ListSupportedResourceTypesRequest $args
     * @return ListSupportedResourceTypesResponse
     */
    public function listSupportedResourceTypes(ListSupportedResourceTypesRequest $args)
    {
        $result = parent::listSupportedResourceTypes($args->toArray());
        return new ListSupportedResourceTypesResponse($result->toArray());
    }
}
