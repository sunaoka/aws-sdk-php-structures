<?php

namespace Sunaoka\Aws\Structures\SecurityIR\UpdateCaseStatus;

trait UpdateCaseStatusTrait
{
    /**
     * @param UpdateCaseStatusRequest $args
     * @return UpdateCaseStatusResponse
     */
    public function updateCaseStatus(UpdateCaseStatusRequest $args)
    {
        $result = parent::updateCaseStatus($args->toArray());
        return new UpdateCaseStatusResponse($result->toArray());
    }
}
