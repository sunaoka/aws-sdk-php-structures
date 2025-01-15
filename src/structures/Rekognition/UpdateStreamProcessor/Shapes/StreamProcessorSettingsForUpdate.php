<?php

namespace Sunaoka\Aws\Structures\Rekognition\UpdateStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectedHomeSettingsForUpdate|null $ConnectedHomeForUpdate
 */
class StreamProcessorSettingsForUpdate extends Shape
{
    /**
     * @param array{ConnectedHomeForUpdate?: ConnectedHomeSettingsForUpdate|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
