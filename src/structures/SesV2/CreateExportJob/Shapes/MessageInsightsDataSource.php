<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property \Aws\Api\DateTimeResult $EndDate
 * @property MessageInsightsFilters $Include
 * @property MessageInsightsFilters $Exclude
 * @property int<1, 10000> $MaxResults
 */
class MessageInsightsDataSource extends Shape
{
    /**
     * @param array{
     *     StartDate: \Aws\Api\DateTimeResult,
     *     EndDate: \Aws\Api\DateTimeResult,
     *     Include?: MessageInsightsFilters,
     *     Exclude?: MessageInsightsFilters,
     *     MaxResults?: int<1, 10000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
