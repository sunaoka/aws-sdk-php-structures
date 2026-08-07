<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\StopRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'RUNNING'|'COMPLETED'|'SKIPPED'|'ERRORED'|null $status
 * @property JobReport|null $jobReport
 */
class RunInsights extends Shape
{
    /**
     * @param array{
     *     status?: 'PENDING'|'RUNNING'|'COMPLETED'|'SKIPPED'|'ERRORED'|null,
     *     jobReport?: JobReport|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
