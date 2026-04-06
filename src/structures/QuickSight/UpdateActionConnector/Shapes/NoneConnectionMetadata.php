<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BaseEndpoint
 */
class NoneConnectionMetadata extends Shape
{
    /**
     * @param array{BaseEndpoint: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
