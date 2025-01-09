<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyReplicationInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationInstanceArn
 * @property int $AllocatedStorage
 * @property bool $ApplyImmediately
 * @property string $ReplicationInstanceClass
 * @property list<string> $VpcSecurityGroupIds
 * @property string $PreferredMaintenanceWindow
 * @property bool $MultiAZ
 * @property string $EngineVersion
 * @property bool $AllowMajorVersionUpgrade
 * @property bool $AutoMinorVersionUpgrade
 * @property string $ReplicationInstanceIdentifier
 * @property string $NetworkType
 * @property Shapes\KerberosAuthenticationSettings $KerberosAuthenticationSettings
 */
class ModifyReplicationInstanceRequest extends Request
{
    /**
     * @param array{
     *     ReplicationInstanceArn: string,
     *     AllocatedStorage?: int,
     *     ApplyImmediately?: bool,
     *     ReplicationInstanceClass?: string,
     *     VpcSecurityGroupIds?: list<string>,
     *     PreferredMaintenanceWindow?: string,
     *     MultiAZ?: bool,
     *     EngineVersion?: string,
     *     AllowMajorVersionUpgrade?: bool,
     *     AutoMinorVersionUpgrade?: bool,
     *     ReplicationInstanceIdentifier?: string,
     *     NetworkType?: string,
     *     KerberosAuthenticationSettings?: Shapes\KerberosAuthenticationSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
