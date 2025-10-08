<?php

namespace Sunaoka\Aws\Structures\DataZone\ListLineageNodeHistory;

trait ListLineageNodeHistoryTrait
{
    /**
     * @param ListLineageNodeHistoryRequest $args
     * @return ListLineageNodeHistoryResponse
     */
    public function listLineageNodeHistory(ListLineageNodeHistoryRequest $args)
    {
        $result = parent::listLineageNodeHistory($args->toArray());
        return new ListLineageNodeHistoryResponse($result->toArray());
    }
}
