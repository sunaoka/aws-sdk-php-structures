<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\CreateServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $AssociatePublicIpAddress
 * @property string|null $CustomDomain
 * @property string|null $CustomCertificate
 * @property string|null $CustomPrivateKey
 * @property bool|null $DisableAutomatedBackup
 * @property string $Engine
 * @property string|null $EngineModel
 * @property string|null $EngineVersion
 * @property list<Shapes\EngineAttribute>|null $EngineAttributes
 * @property int<1, max>|null $BackupRetentionCount
 * @property string $ServerName
 * @property string $InstanceProfileArn
 * @property string $InstanceType
 * @property string|null $KeyPair
 * @property string|null $PreferredMaintenanceWindow
 * @property string|null $PreferredBackupWindow
 * @property list<string>|null $SecurityGroupIds
 * @property string $ServiceRoleArn
 * @property list<string>|null $SubnetIds
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $BackupId
 */
class CreateServerRequest extends Request
{
    /**
     * @param array{
     *     AssociatePublicIpAddress?: bool|null,
     *     CustomDomain?: string|null,
     *     CustomCertificate?: string|null,
     *     CustomPrivateKey?: string|null,
     *     DisableAutomatedBackup?: bool|null,
     *     Engine: string,
     *     EngineModel?: string|null,
     *     EngineVersion?: string|null,
     *     EngineAttributes?: list<Shapes\EngineAttribute>|null,
     *     BackupRetentionCount?: int<1, max>|null,
     *     ServerName: string,
     *     InstanceProfileArn: string,
     *     InstanceType: string,
     *     KeyPair?: string|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     PreferredBackupWindow?: string|null,
     *     SecurityGroupIds?: list<string>|null,
     *     ServiceRoleArn: string,
     *     SubnetIds?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     BackupId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
