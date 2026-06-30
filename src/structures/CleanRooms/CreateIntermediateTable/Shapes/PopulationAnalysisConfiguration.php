<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateIntermediateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PopulationAnalysisSqlParameters|null $sqlParameters
 */
class PopulationAnalysisConfiguration extends Shape
{
    /**
     * @param array{sqlParameters?: PopulationAnalysisSqlParameters|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
