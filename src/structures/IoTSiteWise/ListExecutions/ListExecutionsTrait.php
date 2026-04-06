<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListExecutions;

trait ListExecutionsTrait
{
    /**
     * @param ListExecutionsRequest $args
     * @return ListExecutionsResponse
     */
    public function listExecutions(ListExecutionsRequest $args)
    {
        $result = parent::listExecutions($args->toArray());
        return new ListExecutionsResponse($result->toArray());
    }
}
