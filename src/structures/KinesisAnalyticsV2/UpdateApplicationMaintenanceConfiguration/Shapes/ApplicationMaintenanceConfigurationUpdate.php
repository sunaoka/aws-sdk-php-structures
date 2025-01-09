<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplicationMaintenanceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationMaintenanceWindowStartTimeUpdate
 */
class ApplicationMaintenanceConfigurationUpdate extends Shape
{
    /**
     * @param array{ApplicationMaintenanceWindowStartTimeUpdate: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
