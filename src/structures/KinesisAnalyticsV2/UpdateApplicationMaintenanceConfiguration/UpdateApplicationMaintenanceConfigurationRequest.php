<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplicationMaintenanceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property Shapes\ApplicationMaintenanceConfigurationUpdate $ApplicationMaintenanceConfigurationUpdate
 */
class UpdateApplicationMaintenanceConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     ApplicationMaintenanceConfigurationUpdate: Shapes\ApplicationMaintenanceConfigurationUpdate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
