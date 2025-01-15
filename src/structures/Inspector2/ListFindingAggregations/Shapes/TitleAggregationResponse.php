<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property SeverityCounts|null $severityCounts
 * @property string $title
 * @property string|null $vulnerabilityId
 */
class TitleAggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     severityCounts?: SeverityCounts|null,
     *     title: string,
     *     vulnerabilityId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
