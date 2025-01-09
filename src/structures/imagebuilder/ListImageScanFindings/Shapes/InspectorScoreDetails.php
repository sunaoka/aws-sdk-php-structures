<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CvssScoreDetails $adjustedCvss
 */
class InspectorScoreDetails extends Shape
{
    /**
     * @param array{adjustedCvss?: CvssScoreDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
