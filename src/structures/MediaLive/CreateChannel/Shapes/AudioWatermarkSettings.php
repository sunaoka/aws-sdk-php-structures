<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NielsenWatermarksSettings|null $NielsenWatermarksSettings
 */
class AudioWatermarkSettings extends Shape
{
    /**
     * @param array{NielsenWatermarksSettings?: NielsenWatermarksSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
