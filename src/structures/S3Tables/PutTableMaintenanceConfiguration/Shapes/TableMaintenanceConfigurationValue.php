<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableMaintenanceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enabled'|'disabled' $status
 * @property TableMaintenanceSettings $settings
 */
class TableMaintenanceConfigurationValue extends Shape
{
    /**
     * @param array{
     *     status?: 'enabled'|'disabled',
     *     settings?: TableMaintenanceSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
