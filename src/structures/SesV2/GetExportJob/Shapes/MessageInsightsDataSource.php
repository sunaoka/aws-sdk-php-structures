<?php

namespace Sunaoka\Aws\Structures\SesV2\GetExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property \Aws\Api\DateTimeResult $EndDate
 * @property MessageInsightsFilters $Include
 * @property MessageInsightsFilters $Exclude
 * @property int $MaxResults
 */
class MessageInsightsDataSource extends Shape
{
    /**
     * @param array{
     *     StartDate: \Aws\Api\DateTimeResult,
     *     EndDate: \Aws\Api\DateTimeResult,
     *     Include?: MessageInsightsFilters,
     *     Exclude?: MessageInsightsFilters,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
