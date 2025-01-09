<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchDeleteDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $messageId
 * @property string $detectorModelName
 * @property string $keyValue
 */
class DeleteDetectorRequest extends Shape
{
    /**
     * @param array{
     *     messageId: string,
     *     detectorModelName: string,
     *     keyValue?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
