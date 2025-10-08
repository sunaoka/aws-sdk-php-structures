<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListLifecycleExecutionResources;

trait ListLifecycleExecutionResourcesTrait
{
    /**
     * @param ListLifecycleExecutionResourcesRequest $args
     * @return ListLifecycleExecutionResourcesResponse
     */
    public function listLifecycleExecutionResources(ListLifecycleExecutionResourcesRequest $args)
    {
        $result = parent::listLifecycleExecutionResources($args->toArray());
        return new ListLifecycleExecutionResourcesResponse($result->toArray());
    }
}
