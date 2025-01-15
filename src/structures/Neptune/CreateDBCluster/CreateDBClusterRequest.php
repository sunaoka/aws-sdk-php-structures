<?php

namespace Sunaoka\Aws\Structures\Neptune\CreateDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $AvailabilityZones
 * @property int|null $BackupRetentionPeriod
 * @property string|null $CharacterSetName
 * @property bool|null $CopyTagsToSnapshot
 * @property string|null $DatabaseName
 * @property string $DBClusterIdentifier
 * @property string|null $DBClusterParameterGroupName
 * @property list<string>|null $VpcSecurityGroupIds
 * @property string|null $DBSubnetGroupName
 * @property string $Engine
 * @property string|null $EngineVersion
 * @property int|null $Port
 * @property string|null $MasterUsername
 * @property string|null $MasterUserPassword
 * @property string|null $OptionGroupName
 * @property string|null $PreferredBackupWindow
 * @property string|null $PreferredMaintenanceWindow
 * @property string|null $ReplicationSourceIdentifier
 * @property list<Shapes\Tag>|null $Tags
 * @property bool|null $StorageEncrypted
 * @property string|null $KmsKeyId
 * @property string|null $PreSignedUrl
 * @property bool|null $EnableIAMDatabaseAuthentication
 * @property list<string>|null $EnableCloudwatchLogsExports
 * @property bool|null $DeletionProtection
 * @property Shapes\ServerlessV2ScalingConfiguration|null $ServerlessV2ScalingConfiguration
 * @property string|null $GlobalClusterIdentifier
 * @property string|null $StorageType
 */
class CreateDBClusterRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>|null,
     *     BackupRetentionPeriod?: int|null,
     *     CharacterSetName?: string|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     DatabaseName?: string|null,
     *     DBClusterIdentifier: string,
     *     DBClusterParameterGroupName?: string|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     DBSubnetGroupName?: string|null,
     *     Engine: string,
     *     EngineVersion?: string|null,
     *     Port?: int|null,
     *     MasterUsername?: string|null,
     *     MasterUserPassword?: string|null,
     *     OptionGroupName?: string|null,
     *     PreferredBackupWindow?: string|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     ReplicationSourceIdentifier?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     StorageEncrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     PreSignedUrl?: string|null,
     *     EnableIAMDatabaseAuthentication?: bool|null,
     *     EnableCloudwatchLogsExports?: list<string>|null,
     *     DeletionProtection?: bool|null,
     *     ServerlessV2ScalingConfiguration?: Shapes\ServerlessV2ScalingConfiguration|null,
     *     GlobalClusterIdentifier?: string|null,
     *     StorageType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
