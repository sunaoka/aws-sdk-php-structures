<?php

namespace Sunaoka\Aws\Structures\Odb\CreateCloudExadataInfrastructure;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $displayName
 * @property string $shape
 * @property string|null $availabilityZone
 * @property string|null $availabilityZoneId
 * @property array<string, string>|null $tags
 * @property int $computeCount
 * @property list<Shapes\CustomerContact>|null $customerContactsToSendToOCI
 * @property Shapes\MaintenanceWindow|null $maintenanceWindow
 * @property int $storageCount
 * @property string|null $clientToken
 * @property string|null $databaseServerType
 * @property string|null $storageServerType
 */
class CreateCloudExadataInfrastructureRequest extends Request
{
    /**
     * @param array{
     *     displayName: string,
     *     shape: string,
     *     availabilityZone?: string|null,
     *     availabilityZoneId?: string|null,
     *     tags?: array<string, string>|null,
     *     computeCount: int,
     *     customerContactsToSendToOCI?: list<Shapes\CustomerContact>|null,
     *     maintenanceWindow?: Shapes\MaintenanceWindow|null,
     *     storageCount: int,
     *     clientToken?: string|null,
     *     databaseServerType?: string|null,
     *     storageServerType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
