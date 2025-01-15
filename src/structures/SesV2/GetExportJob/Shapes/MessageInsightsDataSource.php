<?php

namespace Sunaoka\Aws\Structures\SesV2\GetExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property \Aws\Api\DateTimeResult $EndDate
 * @property MessageInsightsFilters|null $Include
 * @property MessageInsightsFilters|null $Exclude
 * @property int<1, 10000>|null $MaxResults
 */
class MessageInsightsDataSource extends Shape
{
    /**
     * @param array{
     *     StartDate: \Aws\Api\DateTimeResult,
     *     EndDate: \Aws\Api\DateTimeResult,
     *     Include?: MessageInsightsFilters|null,
     *     Exclude?: MessageInsightsFilters|null,
     *     MaxResults?: int<1, 10000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
