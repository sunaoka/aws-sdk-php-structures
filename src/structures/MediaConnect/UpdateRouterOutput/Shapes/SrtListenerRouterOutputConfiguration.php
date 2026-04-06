<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<3000, 30000> $Port
 * @property int<10, 10000> $MinimumLatencyMilliseconds
 * @property SrtEncryptionConfiguration|null $EncryptionConfiguration
 */
class SrtListenerRouterOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     Port: int<3000, 30000>,
     *     MinimumLatencyMilliseconds: int<10, 10000>,
     *     EncryptionConfiguration?: SrtEncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
