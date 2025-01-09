<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchUpdateDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $messageId
 * @property string $detectorModelName
 * @property string $keyValue
 * @property DetectorStateDefinition $state
 */
class UpdateDetectorRequest extends Shape
{
    /**
     * @param array{
     *     messageId: string,
     *     detectorModelName: string,
     *     keyValue?: string,
     *     state: DetectorStateDefinition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
