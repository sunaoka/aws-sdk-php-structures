<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateCloudExadataInfrastructure;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cloudExadataInfrastructureId
 * @property Shapes\MaintenanceWindow|null $maintenanceWindow
 */
class UpdateCloudExadataInfrastructureRequest extends Request
{
    /**
     * @param array{
     *     cloudExadataInfrastructureId: string,
     *     maintenanceWindow?: Shapes\MaintenanceWindow|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
