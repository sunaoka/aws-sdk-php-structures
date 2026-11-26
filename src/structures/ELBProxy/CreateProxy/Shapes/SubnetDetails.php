<?php

namespace Sunaoka\Aws\Structures\ELBProxy\CreateProxy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $subnetId
 */
class SubnetDetails extends Shape
{
    /**
     * @param array{subnetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
