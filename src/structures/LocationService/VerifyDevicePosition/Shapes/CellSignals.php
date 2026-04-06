<?php

namespace Sunaoka\Aws\Structures\LocationService\VerifyDevicePosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LteCellDetails> $LteCellDetails
 */
class CellSignals extends Shape
{
    /**
     * @param array{LteCellDetails: list<LteCellDetails>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
