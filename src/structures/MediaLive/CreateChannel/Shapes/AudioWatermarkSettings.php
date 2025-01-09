<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NielsenWatermarksSettings $NielsenWatermarksSettings
 */
class AudioWatermarkSettings extends Shape
{
    /**
     * @param array{NielsenWatermarksSettings?: NielsenWatermarksSettings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
