<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchFlowExecutions;

trait SearchFlowExecutionsTrait
{
    /**
     * @param SearchFlowExecutionsRequest $args
     * @return SearchFlowExecutionsResponse
     */
    public function searchFlowExecutions(SearchFlowExecutionsRequest $args)
    {
        $result = parent::searchFlowExecutions($args->toArray());
        return new SearchFlowExecutionsResponse($result->toArray());
    }
}
