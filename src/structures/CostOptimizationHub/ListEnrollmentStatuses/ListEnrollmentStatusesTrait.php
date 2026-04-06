<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListEnrollmentStatuses;

trait ListEnrollmentStatusesTrait
{
    /**
     * @param ListEnrollmentStatusesRequest $args
     * @return ListEnrollmentStatusesResponse
     */
    public function listEnrollmentStatuses(ListEnrollmentStatusesRequest $args)
    {
        $result = parent::listEnrollmentStatuses($args->toArray());
        return new ListEnrollmentStatusesResponse($result->toArray());
    }
}
