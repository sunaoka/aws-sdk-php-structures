<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BandName
 * @property 'INT32'|'FLOAT32'|'INT16'|'FLOAT64'|'UINT16' $OutputDataType
 */
class OutputBand extends Shape
{
    /**
     * @param array{
     *     BandName: string,
     *     OutputDataType: 'INT32'|'FLOAT32'|'INT16'|'FLOAT64'|'UINT16'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
