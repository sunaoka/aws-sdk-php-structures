<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAfter
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedBefore
 * @property string|null $Locale
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeDBRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     LastUpdatedAfter?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedBefore?: \Aws\Api\DateTimeResult|null,
     *     Locale?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
