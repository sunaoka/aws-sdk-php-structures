<?php

namespace Sunaoka\Aws\Structures\DynamoDb\RestoreTableToPointInTime;

trait RestoreTableToPointInTimeTrait
{
    /**
     * @param RestoreTableToPointInTimeRequest $args
     * @return RestoreTableToPointInTimeResponse
     */
    public function restoreTableToPointInTime(RestoreTableToPointInTimeRequest $args)
    {
        $result = parent::restoreTableToPointInTime($args->toArray());
        return new RestoreTableToPointInTimeResponse($result->toArray());
    }
}
