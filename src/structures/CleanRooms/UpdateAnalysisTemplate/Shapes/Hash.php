<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateAnalysisTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sha256
 */
class Hash extends Shape
{
    /**
     * @param array{sha256?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
