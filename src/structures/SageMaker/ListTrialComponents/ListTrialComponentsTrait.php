<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrialComponents;

trait ListTrialComponentsTrait
{
    /**
     * @param ListTrialComponentsRequest $args
     * @return ListTrialComponentsResponse
     */
    public function listTrialComponents(ListTrialComponentsRequest $args)
    {
        $result = parent::listTrialComponents($args->toArray());
        return new ListTrialComponentsResponse($result->toArray());
    }
}
