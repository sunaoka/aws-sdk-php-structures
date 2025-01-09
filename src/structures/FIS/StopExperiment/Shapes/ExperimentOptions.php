<?php

namespace Sunaoka\Aws\Structures\FIS\StopExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'single-account'|'multi-account' $accountTargeting
 * @property 'fail'|'skip' $emptyTargetResolutionMode
 * @property 'skip-all'|'run-all' $actionsMode
 */
class ExperimentOptions extends Shape
{
    /**
     * @param array{
     *     accountTargeting?: 'single-account'|'multi-account',
     *     emptyTargetResolutionMode?: 'fail'|'skip',
     *     actionsMode?: 'skip-all'|'run-all'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
