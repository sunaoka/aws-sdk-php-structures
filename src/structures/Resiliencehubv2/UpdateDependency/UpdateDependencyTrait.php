<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateDependency;

trait UpdateDependencyTrait
{
    /**
     * @param UpdateDependencyRequest $args
     * @return UpdateDependencyResponse
     */
    public function updateDependency(UpdateDependencyRequest $args)
    {
        $result = parent::updateDependency($args->toArray());
        return new UpdateDependencyResponse($result->toArray());
    }
}
