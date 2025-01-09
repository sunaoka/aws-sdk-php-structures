<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\CreateServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $AssociatePublicIpAddress
 * @property string $CustomDomain
 * @property string $CustomCertificate
 * @property string $CustomPrivateKey
 * @property bool $DisableAutomatedBackup
 * @property string $Engine
 * @property string $EngineModel
 * @property string $EngineVersion
 * @property list<Shapes\EngineAttribute> $EngineAttributes
 * @property int<1, max> $BackupRetentionCount
 * @property string $ServerName
 * @property string $InstanceProfileArn
 * @property string $InstanceType
 * @property string $KeyPair
 * @property string $PreferredMaintenanceWindow
 * @property string $PreferredBackupWindow
 * @property list<string> $SecurityGroupIds
 * @property string $ServiceRoleArn
 * @property list<string> $SubnetIds
 * @property list<Shapes\Tag> $Tags
 * @property string $BackupId
 */
class CreateServerRequest extends Request
{
    /**
     * @param array{
     *     AssociatePublicIpAddress?: bool,
     *     CustomDomain?: string,
     *     CustomCertificate?: string,
     *     CustomPrivateKey?: string,
     *     DisableAutomatedBackup?: bool,
     *     Engine: string,
     *     EngineModel?: string,
     *     EngineVersion?: string,
     *     EngineAttributes?: list<Shapes\EngineAttribute>,
     *     BackupRetentionCount?: int<1, max>,
     *     ServerName: string,
     *     InstanceProfileArn: string,
     *     InstanceType: string,
     *     KeyPair?: string,
     *     PreferredMaintenanceWindow?: string,
     *     PreferredBackupWindow?: string,
     *     SecurityGroupIds?: list<string>,
     *     ServiceRoleArn: string,
     *     SubnetIds?: list<string>,
     *     Tags?: list<Shapes\Tag>,
     *     BackupId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
