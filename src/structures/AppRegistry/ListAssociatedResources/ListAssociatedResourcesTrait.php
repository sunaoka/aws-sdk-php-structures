<?php

namespace Sunaoka\Aws\Structures\AppRegistry\ListAssociatedResources;

trait ListAssociatedResourcesTrait
{
    /**
     * @param ListAssociatedResourcesRequest $args
     * @return ListAssociatedResourcesResponse
     */
    public function listAssociatedResources(ListAssociatedResourcesRequest $args)
    {
        $result = parent::listAssociatedResources($args->toArray());
        return new ListAssociatedResourcesResponse($result->toArray());
    }
}
