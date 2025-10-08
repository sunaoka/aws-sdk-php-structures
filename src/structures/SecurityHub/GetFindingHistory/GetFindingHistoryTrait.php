<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingHistory;

trait GetFindingHistoryTrait
{
    /**
     * @param GetFindingHistoryRequest $args
     * @return GetFindingHistoryResponse
     */
    public function getFindingHistory(GetFindingHistoryRequest $args)
    {
        $result = parent::getFindingHistory($args->toArray());
        return new GetFindingHistoryResponse($result->toArray());
    }
}
