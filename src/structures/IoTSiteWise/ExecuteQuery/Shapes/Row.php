<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ExecuteQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Datum> $data
 */
class Row extends Shape
{
    /**
     * @param array{data: list<Datum>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
