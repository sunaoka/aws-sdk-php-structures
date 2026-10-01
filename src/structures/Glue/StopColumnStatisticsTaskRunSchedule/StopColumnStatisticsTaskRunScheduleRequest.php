<?php

namespace Sunaoka\Aws\Structures\Glue\StopColumnStatisticsTaskRunSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseName
 * @property string $TableName
 * @property string|null $CatalogID
 */
class StopColumnStatisticsTaskRunScheduleRequest extends Request
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     TableName: string,
     *     CatalogID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
