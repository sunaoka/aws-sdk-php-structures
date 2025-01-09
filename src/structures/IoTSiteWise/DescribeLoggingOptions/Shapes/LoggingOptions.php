<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeLoggingOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ERROR'|'INFO'|'OFF' $level
 */
class LoggingOptions extends Shape
{
    /**
     * @param array{level: 'ERROR'|'INFO'|'OFF'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
