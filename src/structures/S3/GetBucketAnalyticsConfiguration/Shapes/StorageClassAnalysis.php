<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketAnalyticsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StorageClassAnalysisDataExport $DataExport
 */
class StorageClassAnalysis extends Shape
{
    /**
     * @param array{DataExport?: StorageClassAnalysisDataExport} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
