<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreTestingPlans;

trait ListRestoreTestingPlansTrait
{
    /**
     * @param ListRestoreTestingPlansRequest $args
     * @return ListRestoreTestingPlansResponse
     */
    public function listRestoreTestingPlans(ListRestoreTestingPlansRequest $args)
    {
        $result = parent::listRestoreTestingPlans($args->toArray());
        return new ListRestoreTestingPlansResponse($result->toArray());
    }
}
