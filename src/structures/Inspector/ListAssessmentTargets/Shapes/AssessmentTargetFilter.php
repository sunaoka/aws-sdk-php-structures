<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $assessmentTargetNamePattern
 */
class AssessmentTargetFilter extends Shape
{
    /**
     * @param array{assessmentTargetNamePattern?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
