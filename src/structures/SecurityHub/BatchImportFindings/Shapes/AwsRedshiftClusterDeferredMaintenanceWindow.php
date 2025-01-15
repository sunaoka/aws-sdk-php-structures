<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeferMaintenanceEndTime
 * @property string|null $DeferMaintenanceIdentifier
 * @property string|null $DeferMaintenanceStartTime
 */
class AwsRedshiftClusterDeferredMaintenanceWindow extends Shape
{
    /**
     * @param array{
     *     DeferMaintenanceEndTime?: string|null,
     *     DeferMaintenanceIdentifier?: string|null,
     *     DeferMaintenanceStartTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
