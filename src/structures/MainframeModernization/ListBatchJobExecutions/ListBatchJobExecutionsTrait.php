<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListBatchJobExecutions;

trait ListBatchJobExecutionsTrait
{
    /**
     * @param ListBatchJobExecutionsRequest $args
     * @return ListBatchJobExecutionsResponse
     */
    public function listBatchJobExecutions(ListBatchJobExecutionsRequest $args)
    {
        $result = parent::listBatchJobExecutions($args->toArray());
        return new ListBatchJobExecutionsResponse($result->toArray());
    }
}
