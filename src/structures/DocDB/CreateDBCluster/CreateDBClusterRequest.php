<?php

namespace Sunaoka\Aws\Structures\DocDB\CreateDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AvailabilityZones
 * @property int $BackupRetentionPeriod
 * @property string $DBClusterIdentifier
 * @property string $DBClusterParameterGroupName
 * @property list<string> $VpcSecurityGroupIds
 * @property string $DBSubnetGroupName
 * @property string $Engine
 * @property string $EngineVersion
 * @property int $Port
 * @property string $MasterUsername
 * @property string $MasterUserPassword
 * @property string $PreferredBackupWindow
 * @property string $PreferredMaintenanceWindow
 * @property list<Shapes\Tag> $Tags
 * @property bool $StorageEncrypted
 * @property string $KmsKeyId
 * @property string $PreSignedUrl
 * @property list<string> $EnableCloudwatchLogsExports
 * @property bool $DeletionProtection
 * @property string $GlobalClusterIdentifier
 * @property string $StorageType
 * @property bool $ManageMasterUserPassword
 * @property string $MasterUserSecretKmsKeyId
 */
class CreateDBClusterRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>,
     *     BackupRetentionPeriod?: int,
     *     DBClusterIdentifier: string,
     *     DBClusterParameterGroupName?: string,
     *     VpcSecurityGroupIds?: list<string>,
     *     DBSubnetGroupName?: string,
     *     Engine: string,
     *     EngineVersion?: string,
     *     Port?: int,
     *     MasterUsername?: string,
     *     MasterUserPassword?: string,
     *     PreferredBackupWindow?: string,
     *     PreferredMaintenanceWindow?: string,
     *     Tags?: list<Shapes\Tag>,
     *     StorageEncrypted?: bool,
     *     KmsKeyId?: string,
     *     PreSignedUrl?: string,
     *     EnableCloudwatchLogsExports?: list<string>,
     *     DeletionProtection?: bool,
     *     GlobalClusterIdentifier?: string,
     *     StorageType?: string,
     *     ManageMasterUserPassword?: bool,
     *     MasterUserSecretKmsKeyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
