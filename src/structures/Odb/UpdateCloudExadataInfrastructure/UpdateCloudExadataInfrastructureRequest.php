<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateCloudExadataInfrastructure;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cloudExadataInfrastructureId
 * @property string|null $displayName
 * @property int|null $computeCount
 * @property Shapes\MaintenanceWindow|null $maintenanceWindow
 * @property int|null $storageCount
 */
class UpdateCloudExadataInfrastructureRequest extends Request
{
    /**
     * @param array{
     *     cloudExadataInfrastructureId: string,
     *     displayName?: string|null,
     *     computeCount?: int|null,
     *     maintenanceWindow?: Shapes\MaintenanceWindow|null,
     *     storageCount?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
