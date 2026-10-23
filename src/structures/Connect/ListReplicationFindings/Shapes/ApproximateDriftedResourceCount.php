<?php

namespace Sunaoka\Aws\Structures\Connect\ListReplicationFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 * @property int $Count
 * @property \Aws\Api\DateTimeResult $Timestamp
 */
class ApproximateDriftedResourceCount extends Shape
{
    /**
     * @param array{
     *     Region: string,
     *     Count: int,
     *     Timestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
