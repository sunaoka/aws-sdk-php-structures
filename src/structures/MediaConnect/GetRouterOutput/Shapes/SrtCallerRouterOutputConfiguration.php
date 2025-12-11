<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationAddress
 * @property int<0, 65535> $DestinationPort
 * @property int<10, 10000> $MinimumLatencyMilliseconds
 * @property string|null $StreamId
 * @property SrtEncryptionConfiguration|null $EncryptionConfiguration
 */
class SrtCallerRouterOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     DestinationAddress: string,
     *     DestinationPort: int<0, 65535>,
     *     MinimumLatencyMilliseconds: int<10, 10000>,
     *     StreamId?: string|null,
     *     EncryptionConfiguration?: SrtEncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
