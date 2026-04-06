<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DirectoryId
 * @property string|null $Name
 * @property string|null $ShortName
 * @property 'Small'|'Large'|null $Size
 * @property 'Enterprise'|'Standard'|null $Edition
 * @property string|null $Alias
 * @property string|null $AccessUrl
 * @property string|null $Description
 * @property list<string>|null $DnsIpAddrs
 * @property 'Requested'|'Creating'|'Created'|'Active'|'Inoperable'|'Impaired'|'Restoring'|'RestoreFailed'|'Deleting'|'Deleted'|'Failed'|'Updating'|null $Stage
 * @property 'Shared'|'PendingAcceptance'|'Rejected'|'Rejecting'|'RejectFailed'|'Sharing'|'ShareFailed'|'Deleted'|'Deleting'|null $ShareStatus
 * @property 'ORGANIZATIONS'|'HANDSHAKE'|null $ShareMethod
 * @property string|null $ShareNotes
 * @property \Aws\Api\DateTimeResult|null $LaunchTime
 * @property \Aws\Api\DateTimeResult|null $StageLastUpdatedDateTime
 * @property 'SimpleAD'|'ADConnector'|'MicrosoftAD'|'SharedMicrosoftAD'|null $Type
 * @property DirectoryVpcSettingsDescription|null $VpcSettings
 * @property DirectoryConnectSettingsDescription|null $ConnectSettings
 * @property RadiusSettings|null $RadiusSettings
 * @property 'Creating'|'Completed'|'Failed'|null $RadiusStatus
 * @property string|null $StageReason
 * @property bool|null $SsoEnabled
 * @property int<2, max>|null $DesiredNumberOfDomainControllers
 * @property OwnerDirectoryDescription|null $OwnerDirectoryDescription
 * @property RegionsInfo|null $RegionsInfo
 * @property 'SERVER_2012'|'SERVER_2019'|null $OsVersion
 */
class DirectoryDescription extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string|null,
     *     Name?: string|null,
     *     ShortName?: string|null,
     *     Size?: 'Small'|'Large'|null,
     *     Edition?: 'Enterprise'|'Standard'|null,
     *     Alias?: string|null,
     *     AccessUrl?: string|null,
     *     Description?: string|null,
     *     DnsIpAddrs?: list<string>|null,
     *     Stage?: 'Requested'|'Creating'|'Created'|'Active'|'Inoperable'|'Impaired'|'Restoring'|'RestoreFailed'|'Deleting'|'Deleted'|'Failed'|'Updating'|null,
     *     ShareStatus?: 'Shared'|'PendingAcceptance'|'Rejected'|'Rejecting'|'RejectFailed'|'Sharing'|'ShareFailed'|'Deleted'|'Deleting'|null,
     *     ShareMethod?: 'ORGANIZATIONS'|'HANDSHAKE'|null,
     *     ShareNotes?: string|null,
     *     LaunchTime?: \Aws\Api\DateTimeResult|null,
     *     StageLastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     Type?: 'SimpleAD'|'ADConnector'|'MicrosoftAD'|'SharedMicrosoftAD'|null,
     *     VpcSettings?: DirectoryVpcSettingsDescription|null,
     *     ConnectSettings?: DirectoryConnectSettingsDescription|null,
     *     RadiusSettings?: RadiusSettings|null,
     *     RadiusStatus?: 'Creating'|'Completed'|'Failed'|null,
     *     StageReason?: string|null,
     *     SsoEnabled?: bool|null,
     *     DesiredNumberOfDomainControllers?: int<2, max>|null,
     *     OwnerDirectoryDescription?: OwnerDirectoryDescription|null,
     *     RegionsInfo?: RegionsInfo|null,
     *     OsVersion?: 'SERVER_2012'|'SERVER_2019'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
