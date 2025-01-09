<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FaceSearchSettings $FaceSearch
 * @property ConnectedHomeSettings $ConnectedHome
 */
class StreamProcessorSettings extends Shape
{
    /**
     * @param array{
     *     FaceSearch?: FaceSearchSettings,
     *     ConnectedHome?: ConnectedHomeSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
