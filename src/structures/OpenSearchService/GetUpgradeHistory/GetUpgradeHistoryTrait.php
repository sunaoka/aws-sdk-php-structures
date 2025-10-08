<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetUpgradeHistory;

trait GetUpgradeHistoryTrait
{
    /**
     * @param GetUpgradeHistoryRequest $args
     * @return GetUpgradeHistoryResponse
     */
    public function getUpgradeHistory(GetUpgradeHistoryRequest $args)
    {
        $result = parent::getUpgradeHistory($args->toArray());
        return new GetUpgradeHistoryResponse($result->toArray());
    }
}
