<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListInferenceSchedulers;

trait ListInferenceSchedulersTrait
{
    /**
     * @param ListInferenceSchedulersRequest $args
     * @return ListInferenceSchedulersResponse
     */
    public function listInferenceSchedulers(ListInferenceSchedulersRequest $args)
    {
        $result = parent::listInferenceSchedulers($args->toArray());
        return new ListInferenceSchedulersResponse($result->toArray());
    }
}
