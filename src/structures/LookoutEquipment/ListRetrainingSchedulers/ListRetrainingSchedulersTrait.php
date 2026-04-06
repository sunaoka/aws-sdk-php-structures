<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListRetrainingSchedulers;

trait ListRetrainingSchedulersTrait
{
    /**
     * @param ListRetrainingSchedulersRequest $args
     * @return ListRetrainingSchedulersResponse
     */
    public function listRetrainingSchedulers(ListRetrainingSchedulersRequest $args)
    {
        $result = parent::listRetrainingSchedulers($args->toArray());
        return new ListRetrainingSchedulersResponse($result->toArray());
    }
}
