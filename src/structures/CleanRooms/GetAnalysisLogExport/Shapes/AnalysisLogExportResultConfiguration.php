<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetAnalysisLogExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnalysisLogExportOutputConfiguration $outputConfiguration
 */
class AnalysisLogExportResultConfiguration extends Shape
{
    /**
     * @param array{outputConfiguration: AnalysisLogExportOutputConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
