<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $From
 * @property int $To
 */
class InsightTimeRange extends Shape
{
    /**
     * @param array{
     *     From: int,
     *     To: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
