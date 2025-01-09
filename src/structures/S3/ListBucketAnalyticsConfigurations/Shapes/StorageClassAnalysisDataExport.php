<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketAnalyticsConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'V_1' $OutputSchemaVersion
 * @property AnalyticsExportDestination $Destination
 */
class StorageClassAnalysisDataExport extends Shape
{
    /**
     * @param array{
     *     OutputSchemaVersion: 'V_1',
     *     Destination: AnalyticsExportDestination
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
