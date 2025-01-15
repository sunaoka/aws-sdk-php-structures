<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DetectorModelDefinition|null $detectorModelDefinition
 * @property DetectorModelConfiguration|null $detectorModelConfiguration
 */
class DetectorModel extends Shape
{
    /**
     * @param array{
     *     detectorModelDefinition?: DetectorModelDefinition|null,
     *     detectorModelConfiguration?: DetectorModelConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
