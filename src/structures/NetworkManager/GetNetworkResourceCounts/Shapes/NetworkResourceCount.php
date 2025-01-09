<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkResourceCounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceType
 * @property int $Count
 */
class NetworkResourceCount extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string,
     *     Count?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
