<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaborationAnalysisTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DETAILED' $type
 */
class ErrorMessageConfiguration extends Shape
{
    /**
     * @param array{type: 'DETAILED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
