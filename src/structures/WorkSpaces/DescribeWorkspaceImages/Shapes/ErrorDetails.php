<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OutdatedPowershellVersion'|'OfficeInstalled'|'PCoIPAgentInstalled'|'WindowsUpdatesEnabled'|'AutoMountDisabled'|'WorkspacesBYOLAccountNotFound'|'WorkspacesBYOLAccountDisabled'|'DHCPDisabled'|'DiskFreeSpace'|'AdditionalDrivesAttached'|'OSNotSupported'|'DomainJoined'|'AzureDomainJoined'|'FirewallEnabled'|'VMWareToolsInstalled'|'DiskSizeExceeded'|'IncompatiblePartitioning'|'PendingReboot'|'AutoLogonEnabled'|'RealTimeUniversalDisabled'|'MultipleBootPartition'|'Requires64BitOS'|'ZeroRearmCount'|'InPlaceUpgrade'|'AntiVirusInstalled'|'UEFINotSupported'|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class ErrorDetails extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: 'OutdatedPowershellVersion'|'OfficeInstalled'|'PCoIPAgentInstalled'|'WindowsUpdatesEnabled'|'AutoMountDisabled'|'WorkspacesBYOLAccountNotFound'|'WorkspacesBYOLAccountDisabled'|'DHCPDisabled'|'DiskFreeSpace'|'AdditionalDrivesAttached'|'OSNotSupported'|'DomainJoined'|'AzureDomainJoined'|'FirewallEnabled'|'VMWareToolsInstalled'|'DiskSizeExceeded'|'IncompatiblePartitioning'|'PendingReboot'|'AutoLogonEnabled'|'RealTimeUniversalDisabled'|'MultipleBootPartition'|'Requires64BitOS'|'ZeroRearmCount'|'InPlaceUpgrade'|'AntiVirusInstalled'|'UEFINotSupported'|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
