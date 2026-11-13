<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManualRtmpPushNamingConfiguration|null $Manual
 * @property AutomaticRtmpPushNamingConfiguration|null $Automatic
 */
class RtmpPushNamingConfiguration extends Shape
{
    /**
     * @param array{
     *     Manual?: ManualRtmpPushNamingConfiguration|null,
     *     Automatic?: AutomaticRtmpPushNamingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
