<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateFindingsFeedback;

trait UpdateFindingsFeedbackTrait
{
    /**
     * @param UpdateFindingsFeedbackRequest $args
     * @return UpdateFindingsFeedbackResponse
     */
    public function updateFindingsFeedback(UpdateFindingsFeedbackRequest $args)
    {
        $result = parent::updateFindingsFeedback($args->toArray());
        return new UpdateFindingsFeedbackResponse($result->toArray());
    }
}
