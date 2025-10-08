<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppVersionAppComponents;

trait ListAppVersionAppComponentsTrait
{
    /**
     * @param ListAppVersionAppComponentsRequest $args
     * @return ListAppVersionAppComponentsResponse
     */
    public function listAppVersionAppComponents(ListAppVersionAppComponentsRequest $args)
    {
        $result = parent::listAppVersionAppComponents($args->toArray());
        return new ListAppVersionAppComponentsResponse($result->toArray());
    }
}
