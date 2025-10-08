<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteRestoreTestingPlan;

trait DeleteRestoreTestingPlanTrait
{
    /**
     * @param DeleteRestoreTestingPlanRequest $args
     * @return void
     */
    public function deleteRestoreTestingPlan(DeleteRestoreTestingPlanRequest $args)
    {
        parent::deleteRestoreTestingPlan($args->toArray());
    }
}
