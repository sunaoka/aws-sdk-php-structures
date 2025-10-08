<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory;

trait GetExecutionHistoryTrait
{
    /**
     * @param GetExecutionHistoryRequest $args
     * @return GetExecutionHistoryResponse
     */
    public function getExecutionHistory(GetExecutionHistoryRequest $args)
    {
        $result = parent::getExecutionHistory($args->toArray());
        return new GetExecutionHistoryResponse($result->toArray());
    }
}
