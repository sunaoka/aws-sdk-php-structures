<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DetectorModelDefinition $detectorModelDefinition
 * @property DetectorModelConfiguration $detectorModelConfiguration
 */
class DetectorModel extends Shape
{
    /**
     * @param array{
     *     detectorModelDefinition?: DetectorModelDefinition,
     *     detectorModelConfiguration?: DetectorModelConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
