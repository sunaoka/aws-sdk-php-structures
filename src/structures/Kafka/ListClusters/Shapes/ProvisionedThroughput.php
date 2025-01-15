<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property int|null $VolumeThroughput
 */
class ProvisionedThroughput extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     VolumeThroughput?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
