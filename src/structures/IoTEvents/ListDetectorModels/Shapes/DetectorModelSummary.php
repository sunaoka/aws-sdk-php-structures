<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListDetectorModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $detectorModelName
 * @property string $detectorModelDescription
 * @property \Aws\Api\DateTimeResult $creationTime
 */
class DetectorModelSummary extends Shape
{
    /**
     * @param array{
     *     detectorModelName?: string,
     *     detectorModelDescription?: string,
     *     creationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
