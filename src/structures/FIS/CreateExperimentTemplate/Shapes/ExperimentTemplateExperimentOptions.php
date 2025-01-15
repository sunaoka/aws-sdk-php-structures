<?php

namespace Sunaoka\Aws\Structures\FIS\CreateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'single-account'|'multi-account'|null $accountTargeting
 * @property 'fail'|'skip'|null $emptyTargetResolutionMode
 */
class ExperimentTemplateExperimentOptions extends Shape
{
    /**
     * @param array{
     *     accountTargeting?: 'single-account'|'multi-account'|null,
     *     emptyTargetResolutionMode?: 'fail'|'skip'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
