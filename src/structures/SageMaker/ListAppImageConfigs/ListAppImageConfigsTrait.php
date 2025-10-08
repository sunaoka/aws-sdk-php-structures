<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAppImageConfigs;

trait ListAppImageConfigsTrait
{
    /**
     * @param ListAppImageConfigsRequest $args
     * @return ListAppImageConfigsResponse
     */
    public function listAppImageConfigs(ListAppImageConfigsRequest $args)
    {
        $result = parent::listAppImageConfigs($args->toArray());
        return new ListAppImageConfigsResponse($result->toArray());
    }
}
