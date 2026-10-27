<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateSourceEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<3000, 30000> $DestinationIngestPort
 * @property 'ENABLED'|'DISABLED' $ForwardErrorCorrectionState
 */
class RtpStandardSourceEndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     DestinationIngestPort: int<3000, 30000>,
     *     ForwardErrorCorrectionState: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
