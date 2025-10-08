<?php

namespace Sunaoka\Aws\Structures\Athena\ListCalculationExecutions;

trait ListCalculationExecutionsTrait
{
    /**
     * @param ListCalculationExecutionsRequest $args
     * @return ListCalculationExecutionsResponse
     */
    public function listCalculationExecutions(ListCalculationExecutionsRequest $args)
    {
        $result = parent::listCalculationExecutions($args->toArray());
        return new ListCalculationExecutionsResponse($result->toArray());
    }
}
