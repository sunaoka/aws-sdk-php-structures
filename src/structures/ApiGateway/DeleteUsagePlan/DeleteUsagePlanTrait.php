<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteUsagePlan;

trait DeleteUsagePlanTrait
{
    /**
     * @param DeleteUsagePlanRequest $args
     * @return void
     */
    public function deleteUsagePlan(DeleteUsagePlanRequest $args)
    {
        parent::deleteUsagePlan($args->toArray());
    }
}
