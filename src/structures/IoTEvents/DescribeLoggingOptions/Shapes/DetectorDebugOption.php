<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeLoggingOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $detectorModelName
 * @property string $keyValue
 */
class DetectorDebugOption extends Shape
{
    /**
     * @param array{
     *     detectorModelName: string,
     *     keyValue?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
