<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RistRouterOutputConfiguration|null $Rist
 * @property SrtListenerRouterOutputConfiguration|null $SrtListener
 * @property SrtCallerRouterOutputConfiguration|null $SrtCaller
 * @property RtpRouterOutputConfiguration|null $Rtp
 */
class RouterOutputProtocolConfiguration extends Shape
{
    /**
     * @param array{
     *     Rist?: RistRouterOutputConfiguration|null,
     *     SrtListener?: SrtListenerRouterOutputConfiguration|null,
     *     SrtCaller?: SrtCallerRouterOutputConfiguration|null,
     *     Rtp?: RtpRouterOutputConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
