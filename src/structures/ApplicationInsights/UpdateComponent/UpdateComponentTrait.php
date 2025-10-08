<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\UpdateComponent;

trait UpdateComponentTrait
{
    /**
     * @param UpdateComponentRequest $args
     * @return UpdateComponentResponse
     */
    public function updateComponent(UpdateComponentRequest $args)
    {
        $result = parent::updateComponent($args->toArray());
        return new UpdateComponentResponse($result->toArray());
    }
}
