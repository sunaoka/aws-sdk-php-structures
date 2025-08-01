<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $title
 * @property string|null $vulnerabilityId
 * @property string|null $accountId
 * @property SeverityCounts|null $severityCounts
 */
class TitleAggregationResponse extends Shape
{
    /**
     * @param array{
     *     title: string,
     *     vulnerabilityId?: string|null,
     *     accountId?: string|null,
     *     severityCounts?: SeverityCounts|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
