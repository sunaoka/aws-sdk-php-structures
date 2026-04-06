<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPlaybackConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PercentEnabled
 */
class LogConfiguration extends Shape
{
    /**
     * @param array{PercentEnabled: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
