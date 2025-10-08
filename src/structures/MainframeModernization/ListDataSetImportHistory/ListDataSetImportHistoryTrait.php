<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListDataSetImportHistory;

trait ListDataSetImportHistoryTrait
{
    /**
     * @param ListDataSetImportHistoryRequest $args
     * @return ListDataSetImportHistoryResponse
     */
    public function listDataSetImportHistory(ListDataSetImportHistoryRequest $args)
    {
        $result = parent::listDataSetImportHistory($args->toArray());
        return new ListDataSetImportHistoryResponse($result->toArray());
    }
}
