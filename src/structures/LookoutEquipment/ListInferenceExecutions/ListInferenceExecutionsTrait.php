<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListInferenceExecutions;

trait ListInferenceExecutionsTrait
{
    /**
     * @param ListInferenceExecutionsRequest $args
     * @return ListInferenceExecutionsResponse
     */
    public function listInferenceExecutions(ListInferenceExecutionsRequest $args)
    {
        $result = parent::listInferenceExecutions($args->toArray());
        return new ListInferenceExecutionsResponse($result->toArray());
    }
}
