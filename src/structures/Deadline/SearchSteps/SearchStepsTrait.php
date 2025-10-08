<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchSteps;

trait SearchStepsTrait
{
    /**
     * @param SearchStepsRequest $args
     * @return SearchStepsResponse
     */
    public function searchSteps(SearchStepsRequest $args)
    {
        $result = parent::searchSteps($args->toArray());
        return new SearchStepsResponse($result->toArray());
    }
}
