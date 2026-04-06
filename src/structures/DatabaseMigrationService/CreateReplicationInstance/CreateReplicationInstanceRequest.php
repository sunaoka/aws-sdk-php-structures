<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateReplicationInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationInstanceIdentifier
 * @property int|null $AllocatedStorage
 * @property string $ReplicationInstanceClass
 * @property list<string>|null $VpcSecurityGroupIds
 * @property string|null $AvailabilityZone
 * @property string|null $ReplicationSubnetGroupIdentifier
 * @property string|null $PreferredMaintenanceWindow
 * @property bool|null $MultiAZ
 * @property string|null $EngineVersion
 * @property bool|null $AutoMinorVersionUpgrade
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $KmsKeyId
 * @property bool|null $PubliclyAccessible
 * @property string|null $DnsNameServers
 * @property string|null $ResourceIdentifier
 * @property string|null $NetworkType
 * @property Shapes\KerberosAuthenticationSettings|null $KerberosAuthenticationSettings
 */
class CreateReplicationInstanceRequest extends Request
{
    /**
     * @param array{
     *     ReplicationInstanceIdentifier: string,
     *     AllocatedStorage?: int|null,
     *     ReplicationInstanceClass: string,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     AvailabilityZone?: string|null,
     *     ReplicationSubnetGroupIdentifier?: string|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     MultiAZ?: bool|null,
     *     EngineVersion?: string|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     KmsKeyId?: string|null,
     *     PubliclyAccessible?: bool|null,
     *     DnsNameServers?: string|null,
     *     ResourceIdentifier?: string|null,
     *     NetworkType?: string|null,
     *     KerberosAuthenticationSettings?: Shapes\KerberosAuthenticationSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
