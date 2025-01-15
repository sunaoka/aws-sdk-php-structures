<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketAnalyticsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StorageClassAnalysisDataExport|null $DataExport
 */
class StorageClassAnalysis extends Shape
{
    /**
     * @param array{DataExport?: StorageClassAnalysisDataExport|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
