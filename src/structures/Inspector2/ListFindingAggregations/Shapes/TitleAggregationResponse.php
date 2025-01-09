<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property SeverityCounts $severityCounts
 * @property string $title
 * @property string $vulnerabilityId
 */
class TitleAggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     severityCounts?: SeverityCounts,
     *     title: string,
     *     vulnerabilityId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
