<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowSource;

trait UpdateFlowSourceTrait
{
    /**
     * @param UpdateFlowSourceRequest $args
     * @return UpdateFlowSourceResponse
     */
    public function updateFlowSource(UpdateFlowSourceRequest $args)
    {
        $result = parent::updateFlowSource($args->toArray());
        return new UpdateFlowSourceResponse($result->toArray());
    }
}
