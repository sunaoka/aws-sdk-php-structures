<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListDetectorModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $detectorModelName
 * @property string|null $detectorModelDescription
 * @property \Aws\Api\DateTimeResult|null $creationTime
 */
class DetectorModelSummary extends Shape
{
    /**
     * @param array{
     *     detectorModelName?: string|null,
     *     detectorModelDescription?: string|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
