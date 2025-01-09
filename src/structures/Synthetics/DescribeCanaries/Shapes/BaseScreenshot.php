<?php

namespace Sunaoka\Aws\Structures\Synthetics\DescribeCanaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScreenshotName
 * @property list<string> $IgnoreCoordinates
 */
class BaseScreenshot extends Shape
{
    /**
     * @param array{
     *     ScreenshotName: string,
     *     IgnoreCoordinates?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
