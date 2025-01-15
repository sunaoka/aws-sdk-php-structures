<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CvssScoreDetails|null $adjustedCvss
 */
class InspectorScoreDetails extends Shape
{
    /**
     * @param array{adjustedCvss?: CvssScoreDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
