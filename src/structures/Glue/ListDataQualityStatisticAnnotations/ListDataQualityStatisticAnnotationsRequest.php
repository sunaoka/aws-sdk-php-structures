<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityStatisticAnnotations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StatisticId
 * @property string $ProfileId
 * @property Shapes\TimestampFilter $TimestampFilter
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListDataQualityStatisticAnnotationsRequest extends Request
{
    /**
     * @param array{
     *     StatisticId?: string,
     *     ProfileId?: string,
     *     TimestampFilter?: Shapes\TimestampFilter,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
