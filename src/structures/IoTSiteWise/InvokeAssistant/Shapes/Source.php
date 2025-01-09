<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\InvokeAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property Location $location
 */
class Source extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     location?: Location
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
