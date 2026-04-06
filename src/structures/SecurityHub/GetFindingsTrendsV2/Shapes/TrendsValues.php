<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingsTrendsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SeverityTrendsCount $SeverityTrends
 */
class TrendsValues extends Shape
{
    /**
     * @param array{SeverityTrends: SeverityTrendsCount} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
