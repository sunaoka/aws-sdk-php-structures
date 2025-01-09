<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $LastUpdatedAfter
 * @property \Aws\Api\DateTimeResult $LastUpdatedBefore
 * @property string $Locale
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeDBRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     LastUpdatedAfter?: \Aws\Api\DateTimeResult,
     *     LastUpdatedBefore?: \Aws\Api\DateTimeResult,
     *     Locale?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
