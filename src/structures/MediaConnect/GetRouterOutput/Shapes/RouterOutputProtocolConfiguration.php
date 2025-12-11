<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RtpRouterOutputConfiguration|null $Rtp
 * @property RistRouterOutputConfiguration|null $Rist
 * @property SrtListenerRouterOutputConfiguration|null $SrtListener
 * @property SrtCallerRouterOutputConfiguration|null $SrtCaller
 */
class RouterOutputProtocolConfiguration extends Shape
{
    /**
     * @param array{
     *     Rtp?: RtpRouterOutputConfiguration|null,
     *     Rist?: RistRouterOutputConfiguration|null,
     *     SrtListener?: SrtListenerRouterOutputConfiguration|null,
     *     SrtCaller?: SrtCallerRouterOutputConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
