<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\InvokeAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $uri
 */
class Location extends Shape
{
    /**
     * @param array{uri?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
