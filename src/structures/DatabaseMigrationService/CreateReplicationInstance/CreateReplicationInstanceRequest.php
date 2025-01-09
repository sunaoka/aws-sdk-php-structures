<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateReplicationInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationInstanceIdentifier
 * @property int $AllocatedStorage
 * @property string $ReplicationInstanceClass
 * @property list<string> $VpcSecurityGroupIds
 * @property string $AvailabilityZone
 * @property string $ReplicationSubnetGroupIdentifier
 * @property string $PreferredMaintenanceWindow
 * @property bool $MultiAZ
 * @property string $EngineVersion
 * @property bool $AutoMinorVersionUpgrade
 * @property list<Shapes\Tag> $Tags
 * @property string $KmsKeyId
 * @property bool $PubliclyAccessible
 * @property string $DnsNameServers
 * @property string $ResourceIdentifier
 * @property string $NetworkType
 * @property Shapes\KerberosAuthenticationSettings $KerberosAuthenticationSettings
 */
class CreateReplicationInstanceRequest extends Request
{
    /**
     * @param array{
     *     ReplicationInstanceIdentifier: string,
     *     AllocatedStorage?: int,
     *     ReplicationInstanceClass: string,
     *     VpcSecurityGroupIds?: list<string>,
     *     AvailabilityZone?: string,
     *     ReplicationSubnetGroupIdentifier?: string,
     *     PreferredMaintenanceWindow?: string,
     *     MultiAZ?: bool,
     *     EngineVersion?: string,
     *     AutoMinorVersionUpgrade?: bool,
     *     Tags?: list<Shapes\Tag>,
     *     KmsKeyId?: string,
     *     PubliclyAccessible?: bool,
     *     DnsNameServers?: string,
     *     ResourceIdentifier?: string,
     *     NetworkType?: string,
     *     KerberosAuthenticationSettings?: Shapes\KerberosAuthenticationSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
