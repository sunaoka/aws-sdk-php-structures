<?php

namespace Sunaoka\Aws\Structures\DocDB\RestoreDBClusterToPointInTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property string|null $RestoreType
 * @property string $SourceDBClusterIdentifier
 * @property \Aws\Api\DateTimeResult|null $RestoreToTime
 * @property bool|null $UseLatestRestorableTime
 * @property int|null $Port
 * @property string|null $DBSubnetGroupName
 * @property list<string>|null $VpcSecurityGroupIds
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $KmsKeyId
 * @property list<string>|null $EnableCloudwatchLogsExports
 * @property bool|null $DeletionProtection
 * @property string|null $StorageType
 */
class RestoreDBClusterToPointInTimeRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     RestoreType?: string|null,
     *     SourceDBClusterIdentifier: string,
     *     RestoreToTime?: \Aws\Api\DateTimeResult|null,
     *     UseLatestRestorableTime?: bool|null,
     *     Port?: int|null,
     *     DBSubnetGroupName?: string|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     KmsKeyId?: string|null,
     *     EnableCloudwatchLogsExports?: list<string>|null,
     *     DeletionProtection?: bool|null,
     *     StorageType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
