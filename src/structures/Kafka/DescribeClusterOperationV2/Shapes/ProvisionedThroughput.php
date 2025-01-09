<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property int $VolumeThroughput
 */
class ProvisionedThroughput extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     VolumeThroughput?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
