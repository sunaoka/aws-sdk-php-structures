<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DirectoryId
 * @property string $Name
 * @property string $ShortName
 * @property 'Small'|'Large' $Size
 * @property 'Enterprise'|'Standard' $Edition
 * @property string $Alias
 * @property string $AccessUrl
 * @property string $Description
 * @property list<string> $DnsIpAddrs
 * @property 'Requested'|'Creating'|'Created'|'Active'|'Inoperable'|'Impaired'|'Restoring'|'RestoreFailed'|'Deleting'|'Deleted'|'Failed'|'Updating' $Stage
 * @property 'Shared'|'PendingAcceptance'|'Rejected'|'Rejecting'|'RejectFailed'|'Sharing'|'ShareFailed'|'Deleted'|'Deleting' $ShareStatus
 * @property 'ORGANIZATIONS'|'HANDSHAKE' $ShareMethod
 * @property string $ShareNotes
 * @property \Aws\Api\DateTimeResult $LaunchTime
 * @property \Aws\Api\DateTimeResult $StageLastUpdatedDateTime
 * @property 'SimpleAD'|'ADConnector'|'MicrosoftAD'|'SharedMicrosoftAD' $Type
 * @property DirectoryVpcSettingsDescription $VpcSettings
 * @property DirectoryConnectSettingsDescription $ConnectSettings
 * @property RadiusSettings $RadiusSettings
 * @property 'Creating'|'Completed'|'Failed' $RadiusStatus
 * @property string $StageReason
 * @property bool $SsoEnabled
 * @property int<2, max> $DesiredNumberOfDomainControllers
 * @property OwnerDirectoryDescription $OwnerDirectoryDescription
 * @property RegionsInfo $RegionsInfo
 * @property 'SERVER_2012'|'SERVER_2019' $OsVersion
 */
class DirectoryDescription extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string,
     *     Name?: string,
     *     ShortName?: string,
     *     Size?: 'Small'|'Large',
     *     Edition?: 'Enterprise'|'Standard',
     *     Alias?: string,
     *     AccessUrl?: string,
     *     Description?: string,
     *     DnsIpAddrs?: list<string>,
     *     Stage?: 'Requested'|'Creating'|'Created'|'Active'|'Inoperable'|'Impaired'|'Restoring'|'RestoreFailed'|'Deleting'|'Deleted'|'Failed'|'Updating',
     *     ShareStatus?: 'Shared'|'PendingAcceptance'|'Rejected'|'Rejecting'|'RejectFailed'|'Sharing'|'ShareFailed'|'Deleted'|'Deleting',
     *     ShareMethod?: 'ORGANIZATIONS'|'HANDSHAKE',
     *     ShareNotes?: string,
     *     LaunchTime?: \Aws\Api\DateTimeResult,
     *     StageLastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     Type?: 'SimpleAD'|'ADConnector'|'MicrosoftAD'|'SharedMicrosoftAD',
     *     VpcSettings?: DirectoryVpcSettingsDescription,
     *     ConnectSettings?: DirectoryConnectSettingsDescription,
     *     RadiusSettings?: RadiusSettings,
     *     RadiusStatus?: 'Creating'|'Completed'|'Failed',
     *     StageReason?: string,
     *     SsoEnabled?: bool,
     *     DesiredNumberOfDomainControllers?: int<2, max>,
     *     OwnerDirectoryDescription?: OwnerDirectoryDescription,
     *     RegionsInfo?: RegionsInfo,
     *     OsVersion?: 'SERVER_2012'|'SERVER_2019'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
