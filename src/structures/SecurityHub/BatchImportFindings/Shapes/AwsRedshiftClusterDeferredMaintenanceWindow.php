<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeferMaintenanceEndTime
 * @property string $DeferMaintenanceIdentifier
 * @property string $DeferMaintenanceStartTime
 */
class AwsRedshiftClusterDeferredMaintenanceWindow extends Shape
{
    /**
     * @param array{
     *     DeferMaintenanceEndTime?: string,
     *     DeferMaintenanceIdentifier?: string,
     *     DeferMaintenanceStartTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
