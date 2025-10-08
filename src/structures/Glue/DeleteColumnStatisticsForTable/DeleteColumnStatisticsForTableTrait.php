<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteColumnStatisticsForTable;

trait DeleteColumnStatisticsForTableTrait
{
    /**
     * @param DeleteColumnStatisticsForTableRequest $args
     * @return DeleteColumnStatisticsForTableResponse
     */
    public function deleteColumnStatisticsForTable(DeleteColumnStatisticsForTableRequest $args)
    {
        $result = parent::deleteColumnStatisticsForTable($args->toArray());
        return new DeleteColumnStatisticsForTableResponse($result->toArray());
    }
}
