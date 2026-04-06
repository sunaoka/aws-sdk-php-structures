<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OutdatedPowershellVersion'|'OfficeInstalled'|'PCoIPAgentInstalled'|'WindowsUpdatesEnabled'|'AutoMountDisabled'|'WorkspacesBYOLAccountNotFound'|'WorkspacesBYOLAccountDisabled'|'DHCPDisabled'|'DiskFreeSpace'|'AdditionalDrivesAttached'|'OSNotSupported'|'DomainJoined'|'AzureDomainJoined'|'FirewallEnabled'|'VMWareToolsInstalled'|'DiskSizeExceeded'|'IncompatiblePartitioning'|'PendingReboot'|'AutoLogonEnabled'|'RealTimeUniversalDisabled'|'MultipleBootPartition'|'Requires64BitOS'|'ZeroRearmCount'|'InPlaceUpgrade'|'AntiVirusInstalled'|'UEFINotSupported'|'UnknownError'|'AppXPackagesInstalled'|'ReservedStorageInUse'|'AdditionalDrivesPresent'|'WindowsUpdatesRequired'|'SysPrepFileMissing'|'UserProfileMissing'|'InsufficientDiskSpace'|'EnvironmentVariablesPathMissingEntries'|'DomainAccountServicesFound'|'InvalidIp'|'RemoteDesktopServicesDisabled'|'WindowsModulesInstallerDisabled'|'AmazonSsmAgentEnabled'|'UnsupportedSecurityProtocol'|'MultipleUserProfiles'|'StagedAppxPackage'|'UnsupportedOsUpgrade'|'InsufficientRearmCount'|'ProtocolOSIncompatibility'|'MemoryIntegrityIncompatibility'|'RestrictedDriveLetterInUse'|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class ErrorDetails extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: 'OutdatedPowershellVersion'|'OfficeInstalled'|'PCoIPAgentInstalled'|'WindowsUpdatesEnabled'|'AutoMountDisabled'|'WorkspacesBYOLAccountNotFound'|'WorkspacesBYOLAccountDisabled'|'DHCPDisabled'|'DiskFreeSpace'|'AdditionalDrivesAttached'|'OSNotSupported'|'DomainJoined'|'AzureDomainJoined'|'FirewallEnabled'|'VMWareToolsInstalled'|'DiskSizeExceeded'|'IncompatiblePartitioning'|'PendingReboot'|'AutoLogonEnabled'|'RealTimeUniversalDisabled'|'MultipleBootPartition'|'Requires64BitOS'|'ZeroRearmCount'|'InPlaceUpgrade'|'AntiVirusInstalled'|'UEFINotSupported'|'UnknownError'|'AppXPackagesInstalled'|'ReservedStorageInUse'|'AdditionalDrivesPresent'|'WindowsUpdatesRequired'|'SysPrepFileMissing'|'UserProfileMissing'|'InsufficientDiskSpace'|'EnvironmentVariablesPathMissingEntries'|'DomainAccountServicesFound'|'InvalidIp'|'RemoteDesktopServicesDisabled'|'WindowsModulesInstallerDisabled'|'AmazonSsmAgentEnabled'|'UnsupportedSecurityProtocol'|'MultipleUserProfiles'|'StagedAppxPackage'|'UnsupportedOsUpgrade'|'InsufficientRearmCount'|'ProtocolOSIncompatibility'|'MemoryIntegrityIncompatibility'|'RestrictedDriveLetterInUse'|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
