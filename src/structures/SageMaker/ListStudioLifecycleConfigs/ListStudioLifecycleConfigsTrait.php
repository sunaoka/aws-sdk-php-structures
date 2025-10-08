<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListStudioLifecycleConfigs;

trait ListStudioLifecycleConfigsTrait
{
    /**
     * @param ListStudioLifecycleConfigsRequest $args
     * @return ListStudioLifecycleConfigsResponse
     */
    public function listStudioLifecycleConfigs(ListStudioLifecycleConfigsRequest $args)
    {
        $result = parent::listStudioLifecycleConfigs($args->toArray());
        return new ListStudioLifecycleConfigsResponse($result->toArray());
    }
}
