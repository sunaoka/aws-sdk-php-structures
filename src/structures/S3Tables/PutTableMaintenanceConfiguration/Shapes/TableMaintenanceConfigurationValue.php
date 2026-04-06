<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableMaintenanceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enabled'|'disabled'|null $status
 * @property TableMaintenanceSettings|null $settings
 */
class TableMaintenanceConfigurationValue extends Shape
{
    /**
     * @param array{
     *     status?: 'enabled'|'disabled'|null,
     *     settings?: TableMaintenanceSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
