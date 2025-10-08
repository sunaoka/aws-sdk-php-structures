<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsForTable;

trait GetColumnStatisticsForTableTrait
{
    /**
     * @param GetColumnStatisticsForTableRequest $args
     * @return GetColumnStatisticsForTableResponse
     */
    public function getColumnStatisticsForTable(GetColumnStatisticsForTableRequest $args)
    {
        $result = parent::getColumnStatisticsForTable($args->toArray());
        return new GetColumnStatisticsForTableResponse($result->toArray());
    }
}
