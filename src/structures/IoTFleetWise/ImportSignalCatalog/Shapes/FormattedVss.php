<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ImportSignalCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $vssJson
 */
class FormattedVss extends Shape
{
    /**
     * @param array{vssJson?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
