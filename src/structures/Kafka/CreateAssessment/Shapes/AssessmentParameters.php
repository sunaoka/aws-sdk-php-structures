<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TargetInstanceType
 */
class AssessmentParameters extends Shape
{
    /**
     * @param array{TargetInstanceType?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
