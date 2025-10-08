<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListDataSetExportHistory;

trait ListDataSetExportHistoryTrait
{
    /**
     * @param ListDataSetExportHistoryRequest $args
     * @return ListDataSetExportHistoryResponse
     */
    public function listDataSetExportHistory(ListDataSetExportHistoryRequest $args)
    {
        $result = parent::listDataSetExportHistory($args->toArray());
        return new ListDataSetExportHistoryResponse($result->toArray());
    }
}
