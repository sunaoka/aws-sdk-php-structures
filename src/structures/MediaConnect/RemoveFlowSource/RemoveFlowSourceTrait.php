<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RemoveFlowSource;

trait RemoveFlowSourceTrait
{
    /**
     * @param RemoveFlowSourceRequest $args
     * @return RemoveFlowSourceResponse
     */
    public function removeFlowSource(RemoveFlowSourceRequest $args)
    {
        $result = parent::removeFlowSource($args->toArray());
        return new RemoveFlowSourceResponse($result->toArray());
    }
}
