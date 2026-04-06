<?php

namespace Sunaoka\Aws\Structures\AppRunner\DeleteService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EgressConfiguration|null $EgressConfiguration
 * @property IngressConfiguration|null $IngressConfiguration
 */
class NetworkConfiguration extends Shape
{
    /**
     * @param array{
     *     EgressConfiguration?: EgressConfiguration|null,
     *     IngressConfiguration?: IngressConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
