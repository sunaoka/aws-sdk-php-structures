<?php

namespace Sunaoka\Aws\Structures\Neptune\CreateDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AvailabilityZones
 * @property int $BackupRetentionPeriod
 * @property string $CharacterSetName
 * @property bool $CopyTagsToSnapshot
 * @property string $DatabaseName
 * @property string $DBClusterIdentifier
 * @property string $DBClusterParameterGroupName
 * @property list<string> $VpcSecurityGroupIds
 * @property string $DBSubnetGroupName
 * @property string $Engine
 * @property string $EngineVersion
 * @property int $Port
 * @property string $MasterUsername
 * @property string $MasterUserPassword
 * @property string $OptionGroupName
 * @property string $PreferredBackupWindow
 * @property string $PreferredMaintenanceWindow
 * @property string $ReplicationSourceIdentifier
 * @property list<Shapes\Tag> $Tags
 * @property bool $StorageEncrypted
 * @property string $KmsKeyId
 * @property string $PreSignedUrl
 * @property bool $EnableIAMDatabaseAuthentication
 * @property list<string> $EnableCloudwatchLogsExports
 * @property bool $DeletionProtection
 * @property Shapes\ServerlessV2ScalingConfiguration $ServerlessV2ScalingConfiguration
 * @property string $GlobalClusterIdentifier
 * @property string $StorageType
 */
class CreateDBClusterRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>,
     *     BackupRetentionPeriod?: int,
     *     CharacterSetName?: string,
     *     CopyTagsToSnapshot?: bool,
     *     DatabaseName?: string,
     *     DBClusterIdentifier: string,
     *     DBClusterParameterGroupName?: string,
     *     VpcSecurityGroupIds?: list<string>,
     *     DBSubnetGroupName?: string,
     *     Engine: string,
     *     EngineVersion?: string,
     *     Port?: int,
     *     MasterUsername?: string,
     *     MasterUserPassword?: string,
     *     OptionGroupName?: string,
     *     PreferredBackupWindow?: string,
     *     PreferredMaintenanceWindow?: string,
     *     ReplicationSourceIdentifier?: string,
     *     Tags?: list<Shapes\Tag>,
     *     StorageEncrypted?: bool,
     *     KmsKeyId?: string,
     *     PreSignedUrl?: string,
     *     EnableIAMDatabaseAuthentication?: bool,
     *     EnableCloudwatchLogsExports?: list<string>,
     *     DeletionProtection?: bool,
     *     ServerlessV2ScalingConfiguration?: Shapes\ServerlessV2ScalingConfiguration,
     *     GlobalClusterIdentifier?: string,
     *     StorageType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
