<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorString
 */
class ErrorInfo extends Shape
{
    /**
     * @param array{ErrorString?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
