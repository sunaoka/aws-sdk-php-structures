<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListExperimentRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExperimentDefinitionId
 * @property int|null $Run
 * @property string|null $Description
 * @property 'RUNNING'|'DONE'|null $Status
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property \Aws\Api\DateTimeResult|null $EndedAt
 */
class ExperimentRunSummary extends Shape
{
    /**
     * @param array{
     *     ExperimentDefinitionId?: string|null,
     *     Run?: int|null,
     *     Description?: string|null,
     *     Status?: 'RUNNING'|'DONE'|null,
     *     StartedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     EndedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
