<?php

namespace Sunaoka\Aws\Structures\FIS\StopExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'single-account'|'multi-account'|null $accountTargeting
 * @property 'fail'|'skip'|null $emptyTargetResolutionMode
 * @property 'skip-all'|'run-all'|null $actionsMode
 */
class ExperimentOptions extends Shape
{
    /**
     * @param array{
     *     accountTargeting?: 'single-account'|'multi-account'|null,
     *     emptyTargetResolutionMode?: 'fail'|'skip'|null,
     *     actionsMode?: 'skip-all'|'run-all'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
