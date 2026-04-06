<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\InvokeAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property Location|null $location
 */
class Source extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     location?: Location|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
