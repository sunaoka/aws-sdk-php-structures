<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetIntermediateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PopulationAnalysisSqlParameters|null $sqlParameters
 * @property PopulationAnalysisJobParameters|null $jobParameters
 */
class PopulationAnalysisConfiguration extends Shape
{
    /**
     * @param array{
     *     sqlParameters?: PopulationAnalysisSqlParameters|null,
     *     jobParameters?: PopulationAnalysisJobParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
