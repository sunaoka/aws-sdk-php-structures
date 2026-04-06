<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeLoggingOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property 'ERROR' $level
 * @property bool $enabled
 */
class LoggingOptions extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     level: 'ERROR',
     *     enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
