<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingsTrendsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property TrendsValues $TrendsValues
 */
class TrendsMetricsResult extends Shape
{
    /**
     * @param array{
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     TrendsValues: TrendsValues
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
