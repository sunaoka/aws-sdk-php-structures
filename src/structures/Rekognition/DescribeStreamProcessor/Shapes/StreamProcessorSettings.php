<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FaceSearchSettings|null $FaceSearch
 * @property ConnectedHomeSettings|null $ConnectedHome
 */
class StreamProcessorSettings extends Shape
{
    /**
     * @param array{
     *     FaceSearch?: FaceSearchSettings|null,
     *     ConnectedHome?: ConnectedHomeSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
