<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'single-account'|'multi-account' $accountTargeting
 * @property 'fail'|'skip' $emptyTargetResolutionMode
 */
class ExperimentTemplateExperimentOptions extends Shape
{
    /**
     * @param array{
     *     accountTargeting?: 'single-account'|'multi-account',
     *     emptyTargetResolutionMode?: 'fail'|'skip'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
