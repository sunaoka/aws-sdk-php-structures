<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetDashboardForJobRun;

trait GetDashboardForJobRunTrait
{
    /**
     * @param GetDashboardForJobRunRequest $args
     * @return GetDashboardForJobRunResponse
     */
    public function getDashboardForJobRun(GetDashboardForJobRunRequest $args)
    {
        $result = parent::getDashboardForJobRun($args->toArray());
        return new GetDashboardForJobRunResponse($result->toArray());
    }
}
