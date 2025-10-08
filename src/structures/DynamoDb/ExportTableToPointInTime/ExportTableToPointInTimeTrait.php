<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ExportTableToPointInTime;

trait ExportTableToPointInTimeTrait
{
    /**
     * @param ExportTableToPointInTimeRequest $args
     * @return ExportTableToPointInTimeResponse
     */
    public function exportTableToPointInTime(ExportTableToPointInTimeRequest $args)
    {
        $result = parent::exportTableToPointInTime($args->toArray());
        return new ExportTableToPointInTimeResponse($result->toArray());
    }
}
