<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ImportSignalCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vssJson
 */
class FormattedVss extends Shape
{
    /**
     * @param array{vssJson?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
