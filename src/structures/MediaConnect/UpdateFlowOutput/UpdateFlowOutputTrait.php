<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowOutput;

trait UpdateFlowOutputTrait
{
    /**
     * @param UpdateFlowOutputRequest $args
     * @return UpdateFlowOutputResponse
     */
    public function updateFlowOutput(UpdateFlowOutputRequest $args)
    {
        $result = parent::updateFlowOutput($args->toArray());
        return new UpdateFlowOutputResponse($result->toArray());
    }
}
