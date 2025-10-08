<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListRecordHistory;

trait ListRecordHistoryTrait
{
    /**
     * @param ListRecordHistoryRequest $args
     * @return ListRecordHistoryResponse
     */
    public function listRecordHistory(ListRecordHistoryRequest $args)
    {
        $result = parent::listRecordHistory($args->toArray());
        return new ListRecordHistoryResponse($result->toArray());
    }
}
