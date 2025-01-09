<?php

namespace Sunaoka\Aws\Structures\Transfer\ListExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserDetails $UserDetails
 */
class ServiceMetadata extends Shape
{
    /**
     * @param array{UserDetails: UserDetails} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
