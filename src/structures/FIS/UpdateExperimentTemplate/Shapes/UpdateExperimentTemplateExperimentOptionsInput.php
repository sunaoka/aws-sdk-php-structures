<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'fail'|'skip'|null $emptyTargetResolutionMode
 */
class UpdateExperimentTemplateExperimentOptionsInput extends Shape
{
    /**
     * @param array{emptyTargetResolutionMode?: 'fail'|'skip'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
