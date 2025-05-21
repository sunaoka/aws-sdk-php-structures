<?php

namespace Sunaoka\Aws\Structures\Synthetics\StartCanaryDryRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScreenshotName
 * @property list<string>|null $IgnoreCoordinates
 */
class BaseScreenshot extends Shape
{
    /**
     * @param array{
     *     ScreenshotName: string,
     *     IgnoreCoordinates?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
