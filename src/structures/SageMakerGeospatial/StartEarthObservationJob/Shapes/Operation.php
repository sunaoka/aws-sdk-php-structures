<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Equation
 * @property string $Name
 * @property 'INT32'|'FLOAT32'|'INT16'|'FLOAT64'|'UINT16' $OutputType
 */
class Operation extends Shape
{
    /**
     * @param array{
     *     Equation: string,
     *     Name: string,
     *     OutputType?: 'INT32'|'FLOAT32'|'INT16'|'FLOAT64'|'UINT16'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
