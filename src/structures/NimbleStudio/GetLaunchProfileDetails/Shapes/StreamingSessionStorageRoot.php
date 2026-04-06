<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetLaunchProfileDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $linux
 * @property string|null $windows
 */
class StreamingSessionStorageRoot extends Shape
{
    /**
     * @param array{
     *     linux?: string|null,
     *     windows?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
