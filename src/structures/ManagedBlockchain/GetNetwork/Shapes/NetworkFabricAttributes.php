<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OrderingServiceEndpoint
 * @property 'STARTER'|'STANDARD' $Edition
 */
class NetworkFabricAttributes extends Shape
{
    /**
     * @param array{
     *     OrderingServiceEndpoint?: string,
     *     Edition?: 'STARTER'|'STANDARD'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
