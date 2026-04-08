<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Pipeline0
 * @property string|null $Pipeline1
 */
class MediaConnectRouterOutputConnectionMap extends Shape
{
    /**
     * @param array{
     *     Pipeline0?: string|null,
     *     Pipeline1?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
