<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\UpdateEnrollmentStatus;

trait UpdateEnrollmentStatusTrait
{
    /**
     * @param UpdateEnrollmentStatusRequest $args
     * @return UpdateEnrollmentStatusResponse
     */
    public function updateEnrollmentStatus(UpdateEnrollmentStatusRequest $args)
    {
        $result = parent::updateEnrollmentStatus($args->toArray());
        return new UpdateEnrollmentStatusResponse($result->toArray());
    }
}
