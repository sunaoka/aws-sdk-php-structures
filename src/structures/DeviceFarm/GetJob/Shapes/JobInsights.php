<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'RUNNING'|'COMPLETED'|'SKIPPED'|'ERRORED'|null $status
 * @property TestReport|null $testReport
 */
class JobInsights extends Shape
{
    /**
     * @param array{
     *     status?: 'PENDING'|'RUNNING'|'COMPLETED'|'SKIPPED'|'ERRORED'|null,
     *     testReport?: TestReport|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
