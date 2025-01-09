<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STARTER'|'STANDARD' $Edition
 */
class NetworkFabricConfiguration extends Shape
{
    /**
     * @param array{Edition: 'STARTER'|'STANDARD'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
