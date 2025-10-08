<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListFlywheelIterationHistory;

trait ListFlywheelIterationHistoryTrait
{
    /**
     * @param ListFlywheelIterationHistoryRequest $args
     * @return ListFlywheelIterationHistoryResponse
     */
    public function listFlywheelIterationHistory(ListFlywheelIterationHistoryRequest $args)
    {
        $result = parent::listFlywheelIterationHistory($args->toArray());
        return new ListFlywheelIterationHistoryResponse($result->toArray());
    }
}
