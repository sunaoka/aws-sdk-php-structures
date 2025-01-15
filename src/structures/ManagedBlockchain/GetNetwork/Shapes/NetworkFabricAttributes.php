<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OrderingServiceEndpoint
 * @property 'STARTER'|'STANDARD'|null $Edition
 */
class NetworkFabricAttributes extends Shape
{
    /**
     * @param array{
     *     OrderingServiceEndpoint?: string|null,
     *     Edition?: 'STARTER'|'STANDARD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
