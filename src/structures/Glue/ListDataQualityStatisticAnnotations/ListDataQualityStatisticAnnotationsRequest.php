<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityStatisticAnnotations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StatisticId
 * @property string|null $ProfileId
 * @property Shapes\TimestampFilter|null $TimestampFilter
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListDataQualityStatisticAnnotationsRequest extends Request
{
    /**
     * @param array{
     *     StatisticId?: string|null,
     *     ProfileId?: string|null,
     *     TimestampFilter?: Shapes\TimestampFilter|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
