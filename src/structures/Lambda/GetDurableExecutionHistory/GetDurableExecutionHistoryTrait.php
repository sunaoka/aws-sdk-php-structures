<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionHistory;

trait GetDurableExecutionHistoryTrait
{
    /**
     * @param GetDurableExecutionHistoryRequest $args
     * @return GetDurableExecutionHistoryResponse
     */
    public function getDurableExecutionHistory(GetDurableExecutionHistoryRequest $args)
    {
        $result = parent::getDurableExecutionHistory($args->toArray());
        return new GetDurableExecutionHistoryResponse($result->toArray());
    }
}
