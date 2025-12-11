<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<3000, 30000> $Port
 * @property int<10, 10000> $MinimumLatencyMilliseconds
 * @property SrtDecryptionConfiguration|null $DecryptionConfiguration
 */
class SrtListenerRouterInputConfiguration extends Shape
{
    /**
     * @param array{
     *     Port: int<3000, 30000>,
     *     MinimumLatencyMilliseconds: int<10, 10000>,
     *     DecryptionConfiguration?: SrtDecryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
