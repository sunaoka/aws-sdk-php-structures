<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutDashboard;

trait PutDashboardTrait
{
    /**
     * @param PutDashboardRequest $args
     * @return PutDashboardResponse
     */
    public function putDashboard(PutDashboardRequest $args)
    {
        $result = parent::putDashboard($args->toArray());
        return new PutDashboardResponse($result->toArray());
    }
}
