<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\CreateExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SYNCHRONOUS' $Frequency
 */
class RefreshCadence extends Shape
{
    /**
     * @param array{Frequency: 'SYNCHRONOUS'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
