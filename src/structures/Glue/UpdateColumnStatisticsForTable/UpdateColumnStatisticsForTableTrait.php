<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateColumnStatisticsForTable;

trait UpdateColumnStatisticsForTableTrait
{
    /**
     * @param UpdateColumnStatisticsForTableRequest $args
     * @return UpdateColumnStatisticsForTableResponse
     */
    public function updateColumnStatisticsForTable(UpdateColumnStatisticsForTableRequest $args)
    {
        $result = parent::updateColumnStatisticsForTable($args->toArray());
        return new UpdateColumnStatisticsForTableResponse($result->toArray());
    }
}
