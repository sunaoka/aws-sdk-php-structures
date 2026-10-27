<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetDestinationEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RistStandardDestinationEndpointConfiguration|null $Rist
 * @property SrtListenerStandardDestinationEndpointConfiguration|null $SrtListener
 * @property SrtCallerStandardDestinationEndpointConfiguration|null $SrtCaller
 * @property RtpStandardDestinationEndpointConfiguration|null $Rtp
 */
class StandardDestinationEndpointProtocolConfiguration extends Shape
{
    /**
     * @param array{
     *     Rist?: RistStandardDestinationEndpointConfiguration|null,
     *     SrtListener?: SrtListenerStandardDestinationEndpointConfiguration|null,
     *     SrtCaller?: SrtCallerStandardDestinationEndpointConfiguration|null,
     *     Rtp?: RtpStandardDestinationEndpointConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
