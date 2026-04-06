<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaborationAnalysisTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MLSyntheticDataParameters|null $mlSyntheticDataParameters
 */
class SyntheticDataParameters extends Shape
{
    /**
     * @param array{mlSyntheticDataParameters?: MLSyntheticDataParameters|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
