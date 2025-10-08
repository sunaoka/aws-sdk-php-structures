<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RemoveFlowOutput;

trait RemoveFlowOutputTrait
{
    /**
     * @param RemoveFlowOutputRequest $args
     * @return RemoveFlowOutputResponse
     */
    public function removeFlowOutput(RemoveFlowOutputRequest $args)
    {
        $result = parent::removeFlowOutput($args->toArray());
        return new RemoveFlowOutputResponse($result->toArray());
    }
}
