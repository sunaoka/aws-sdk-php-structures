<?php

namespace Sunaoka\Aws\Structures\PCS\GetCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STANDARD'|'NONE' $mode
 */
class SlurmRest extends Shape
{
    /**
     * @param array{mode: 'STANDARD'|'NONE'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
