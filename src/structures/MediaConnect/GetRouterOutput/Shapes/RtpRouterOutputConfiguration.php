<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationAddress
 * @property int<0, 65531> $DestinationPort
 * @property 'ENABLED'|'DISABLED'|null $ForwardErrorCorrection
 */
class RtpRouterOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     DestinationAddress: string,
     *     DestinationPort: int<0, 65531>,
     *     ForwardErrorCorrection?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
