<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateIntermediateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $analysisTemplateArn
 */
class PopulationAnalysisJobParameters extends Shape
{
    /**
     * @param array{analysisTemplateArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
