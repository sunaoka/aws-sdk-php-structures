<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RtpRouterInputConfiguration|null $Rtp
 * @property RistRouterInputConfiguration|null $Rist
 */
class MergeRouterInputProtocolConfiguration extends Shape
{
    /**
     * @param array{
     *     Rtp?: RtpRouterInputConfiguration|null,
     *     Rist?: RistRouterInputConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
