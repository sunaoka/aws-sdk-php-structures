<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RtpRouterInputConfiguration|null $Rtp
 * @property RistRouterInputConfiguration|null $Rist
 * @property SrtListenerRouterInputConfiguration|null $SrtListener
 * @property SrtCallerRouterInputConfiguration|null $SrtCaller
 */
class FailoverRouterInputProtocolConfiguration extends Shape
{
    /**
     * @param array{
     *     Rtp?: RtpRouterInputConfiguration|null,
     *     Rist?: RistRouterInputConfiguration|null,
     *     SrtListener?: SrtListenerRouterInputConfiguration|null,
     *     SrtCaller?: SrtCallerRouterInputConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
