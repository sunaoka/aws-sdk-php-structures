<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RistRouterInputConfiguration|null $Rist
 * @property SrtListenerRouterInputConfiguration|null $SrtListener
 * @property SrtCallerRouterInputConfiguration|null $SrtCaller
 * @property RtpRouterInputConfiguration|null $Rtp
 */
class RouterInputProtocolConfiguration extends Shape
{
    /**
     * @param array{
     *     Rist?: RistRouterInputConfiguration|null,
     *     SrtListener?: SrtListenerRouterInputConfiguration|null,
     *     SrtCaller?: SrtCallerRouterInputConfiguration|null,
     *     Rtp?: RtpRouterInputConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
