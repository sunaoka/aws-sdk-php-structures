<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableBucketMaintenanceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enabled'|'disabled'|null $status
 * @property TableBucketMaintenanceSettings|null $settings
 */
class TableBucketMaintenanceConfigurationValue extends Shape
{
    /**
     * @param array{
     *     status?: 'enabled'|'disabled'|null,
     *     settings?: TableBucketMaintenanceSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
