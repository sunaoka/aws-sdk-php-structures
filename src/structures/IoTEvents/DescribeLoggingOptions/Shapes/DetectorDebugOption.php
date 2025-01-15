<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeLoggingOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $detectorModelName
 * @property string|null $keyValue
 */
class DetectorDebugOption extends Shape
{
    /**
     * @param array{
     *     detectorModelName: string,
     *     keyValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
