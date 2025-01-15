<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyReplicationInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationInstanceArn
 * @property int|null $AllocatedStorage
 * @property bool|null $ApplyImmediately
 * @property string|null $ReplicationInstanceClass
 * @property list<string>|null $VpcSecurityGroupIds
 * @property string|null $PreferredMaintenanceWindow
 * @property bool|null $MultiAZ
 * @property string|null $EngineVersion
 * @property bool|null $AllowMajorVersionUpgrade
 * @property bool|null $AutoMinorVersionUpgrade
 * @property string|null $ReplicationInstanceIdentifier
 * @property string|null $NetworkType
 * @property Shapes\KerberosAuthenticationSettings|null $KerberosAuthenticationSettings
 */
class ModifyReplicationInstanceRequest extends Request
{
    /**
     * @param array{
     *     ReplicationInstanceArn: string,
     *     AllocatedStorage?: int|null,
     *     ApplyImmediately?: bool|null,
     *     ReplicationInstanceClass?: string|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     MultiAZ?: bool|null,
     *     EngineVersion?: string|null,
     *     AllowMajorVersionUpgrade?: bool|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     ReplicationInstanceIdentifier?: string|null,
     *     NetworkType?: string|null,
     *     KerberosAuthenticationSettings?: Shapes\KerberosAuthenticationSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
