<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StatisticId
 * @property string $ProfileId
 * @property Shapes\TimestampFilter $TimestampFilter
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class ListDataQualityStatisticsRequest extends Request
{
    /**
     * @param array{
     *     StatisticId?: string,
     *     ProfileId?: string,
     *     TimestampFilter?: Shapes\TimestampFilter,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
