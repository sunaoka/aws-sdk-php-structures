<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateSourceEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RistStandardSourceEndpointConfiguration|null $Rist
 * @property SrtListenerStandardSourceEndpointConfiguration|null $SrtListener
 * @property SrtCallerStandardSourceEndpointConfiguration|null $SrtCaller
 * @property RtpStandardSourceEndpointConfiguration|null $Rtp
 */
class StandardSourceEndpointProtocolConfiguration extends Shape
{
    /**
     * @param array{
     *     Rist?: RistStandardSourceEndpointConfiguration|null,
     *     SrtListener?: SrtListenerStandardSourceEndpointConfiguration|null,
     *     SrtCaller?: SrtCallerStandardSourceEndpointConfiguration|null,
     *     Rtp?: RtpStandardSourceEndpointConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
