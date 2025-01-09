<?php

namespace Sunaoka\Aws\Structures\DocDB\RestoreDBClusterToPointInTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property string $RestoreType
 * @property string $SourceDBClusterIdentifier
 * @property \Aws\Api\DateTimeResult $RestoreToTime
 * @property bool $UseLatestRestorableTime
 * @property int $Port
 * @property string $DBSubnetGroupName
 * @property list<string> $VpcSecurityGroupIds
 * @property list<Shapes\Tag> $Tags
 * @property string $KmsKeyId
 * @property list<string> $EnableCloudwatchLogsExports
 * @property bool $DeletionProtection
 * @property string $StorageType
 */
class RestoreDBClusterToPointInTimeRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     RestoreType?: string,
     *     SourceDBClusterIdentifier: string,
     *     RestoreToTime?: \Aws\Api\DateTimeResult,
     *     UseLatestRestorableTime?: bool,
     *     Port?: int,
     *     DBSubnetGroupName?: string,
     *     VpcSecurityGroupIds?: list<string>,
     *     Tags?: list<Shapes\Tag>,
     *     KmsKeyId?: string,
     *     EnableCloudwatchLogsExports?: list<string>,
     *     DeletionProtection?: bool,
     *     StorageType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
