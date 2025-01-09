<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $OptIn
 */
class StreamProcessorDataSharingPreference extends Shape
{
    /**
     * @param array{OptIn: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
