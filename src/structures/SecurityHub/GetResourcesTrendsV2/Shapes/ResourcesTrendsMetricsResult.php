<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesTrendsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property ResourcesTrendsValues $TrendsValues
 */
class ResourcesTrendsMetricsResult extends Shape
{
    /**
     * @param array{
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     TrendsValues: ResourcesTrendsValues
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
