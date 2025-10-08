<?php

namespace Sunaoka\Aws\Structures\Evs\CreateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cidr
 */
class InitialVlanInfo extends Shape
{
    /**
     * @param array{cidr: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
