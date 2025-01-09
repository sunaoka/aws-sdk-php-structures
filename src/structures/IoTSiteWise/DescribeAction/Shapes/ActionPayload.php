<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stringValue
 */
class ActionPayload extends Shape
{
    /**
     * @param array{stringValue: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
