<?php

namespace Sunaoka\Aws\Structures\Deadline\ListStepConsumers;

trait ListStepConsumersTrait
{
    /**
     * @param ListStepConsumersRequest $args
     * @return ListStepConsumersResponse
     */
    public function listStepConsumers(ListStepConsumersRequest $args)
    {
        $result = parent::listStepConsumers($args->toArray());
        return new ListStepConsumersResponse($result->toArray());
    }
}
