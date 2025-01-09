<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableBucketMaintenanceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enabled'|'disabled' $status
 * @property TableBucketMaintenanceSettings $settings
 */
class TableBucketMaintenanceConfigurationValue extends Shape
{
    /**
     * @param array{
     *     status?: 'enabled'|'disabled',
     *     settings?: TableBucketMaintenanceSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
