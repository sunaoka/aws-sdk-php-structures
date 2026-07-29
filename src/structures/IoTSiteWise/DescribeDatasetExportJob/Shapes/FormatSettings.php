<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeDatasetExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $framesPerSecond
 * @property int<1, max>|null $widthInPixels
 * @property int<1, max>|null $heightInPixels
 */
class FormatSettings extends Shape
{
    /**
     * @param array{
     *     framesPerSecond?: int<1, max>|null,
     *     widthInPixels?: int<1, max>|null,
     *     heightInPixels?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
