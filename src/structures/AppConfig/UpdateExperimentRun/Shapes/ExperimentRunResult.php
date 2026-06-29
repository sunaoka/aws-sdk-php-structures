<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateExperimentRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExecutiveSummary
 * @property string|null $ReasonsToLaunch
 * @property string|null $ReasonsNotToLaunch
 */
class ExperimentRunResult extends Shape
{
    /**
     * @param array{
     *     ExecutiveSummary?: string|null,
     *     ReasonsToLaunch?: string|null,
     *     ReasonsNotToLaunch?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
