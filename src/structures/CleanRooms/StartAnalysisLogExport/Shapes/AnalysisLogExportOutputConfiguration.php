<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartAnalysisLogExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnalysisLogExportS3OutputConfiguration $s3
 */
class AnalysisLogExportOutputConfiguration extends Shape
{
    /**
     * @param array{s3: AnalysisLogExportS3OutputConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
