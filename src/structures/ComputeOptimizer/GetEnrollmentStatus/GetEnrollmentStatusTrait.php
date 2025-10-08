<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEnrollmentStatus;

trait GetEnrollmentStatusTrait
{
    /**
     * @param GetEnrollmentStatusRequest $args
     * @return GetEnrollmentStatusResponse
     */
    public function getEnrollmentStatus(GetEnrollmentStatusRequest $args)
    {
        $result = parent::getEnrollmentStatus($args->toArray());
        return new GetEnrollmentStatusResponse($result->toArray());
    }
}
