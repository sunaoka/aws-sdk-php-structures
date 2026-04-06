<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateComputationModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inputProperties
 * @property string $resultProperty
 */
class ComputationModelAnomalyDetectionConfiguration extends Shape
{
    /**
     * @param array{
     *     inputProperties: string,
     *     resultProperty: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
