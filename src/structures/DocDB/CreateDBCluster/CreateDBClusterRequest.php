<?php

namespace Sunaoka\Aws\Structures\DocDB\CreateDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $AvailabilityZones
 * @property int|null $BackupRetentionPeriod
 * @property string $DBClusterIdentifier
 * @property string|null $DBClusterParameterGroupName
 * @property list<string>|null $VpcSecurityGroupIds
 * @property string|null $DBSubnetGroupName
 * @property string $Engine
 * @property string|null $EngineVersion
 * @property int|null $Port
 * @property string|null $MasterUsername
 * @property string|null $MasterUserPassword
 * @property string|null $PreferredBackupWindow
 * @property string|null $PreferredMaintenanceWindow
 * @property list<Shapes\Tag>|null $Tags
 * @property bool|null $StorageEncrypted
 * @property string|null $KmsKeyId
 * @property string|null $PreSignedUrl
 * @property list<string>|null $EnableCloudwatchLogsExports
 * @property bool|null $DeletionProtection
 * @property string|null $GlobalClusterIdentifier
 * @property string|null $StorageType
 * @property bool|null $ManageMasterUserPassword
 * @property string|null $MasterUserSecretKmsKeyId
 */
class CreateDBClusterRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>|null,
     *     BackupRetentionPeriod?: int|null,
     *     DBClusterIdentifier: string,
     *     DBClusterParameterGroupName?: string|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     DBSubnetGroupName?: string|null,
     *     Engine: string,
     *     EngineVersion?: string|null,
     *     Port?: int|null,
     *     MasterUsername?: string|null,
     *     MasterUserPassword?: string|null,
     *     PreferredBackupWindow?: string|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     StorageEncrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     PreSignedUrl?: string|null,
     *     EnableCloudwatchLogsExports?: list<string>|null,
     *     DeletionProtection?: bool|null,
     *     GlobalClusterIdentifier?: string|null,
     *     StorageType?: string|null,
     *     ManageMasterUserPassword?: bool|null,
     *     MasterUserSecretKmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
