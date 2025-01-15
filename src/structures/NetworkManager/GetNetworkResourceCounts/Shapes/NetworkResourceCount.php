<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkResourceCounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceType
 * @property int|null $Count
 */
class NetworkResourceCount extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string|null,
     *     Count?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
