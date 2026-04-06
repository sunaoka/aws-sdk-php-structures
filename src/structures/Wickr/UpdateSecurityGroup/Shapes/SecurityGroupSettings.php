<?php

namespace Sunaoka\Aws\Structures\Wickr\UpdateSecurityGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $alwaysReauthenticate
 * @property list<string>|null $atakPackageValues
 * @property CallingSettings|null $calling
 * @property bool|null $checkForUpdates
 * @property bool|null $enableAtak
 * @property bool|null $enableCrashReports
 * @property bool|null $enableFileDownload
 * @property bool|null $enableGuestFederation
 * @property bool|null $enableNotificationPreview
 * @property bool|null $enableOpenAccessOption
 * @property bool|null $enableRestrictedGlobalFederation
 * @property bool|null $filesEnabled
 * @property int|null $forceDeviceLockout
 * @property bool|null $forceOpenAccess
 * @property bool|null $forceReadReceipts
 * @property bool|null $globalFederation
 * @property bool|null $isAtoEnabled
 * @property bool|null $isLinkPreviewEnabled
 * @property bool|null $locationAllowMaps
 * @property bool|null $locationEnabled
 * @property int|null $maxAutoDownloadSize
 * @property int|null $maxBor
 * @property int|null $maxTtl
 * @property bool|null $messageForwardingEnabled
 * @property PasswordRequirements|null $passwordRequirements
 * @property bool|null $presenceEnabled
 * @property list<string>|null $quickResponses
 * @property bool|null $showMasterRecoveryKey
 * @property ShredderSettings|null $shredder
 * @property int|null $ssoMaxIdleMinutes
 * @property int|null $federationMode
 * @property int|null $lockoutThreshold
 * @property list<string>|null $permittedNetworks
 * @property list<WickrAwsNetworks>|null $permittedWickrAwsNetworks
 * @property list<PermittedWickrEnterpriseNetwork>|null $permittedWickrEnterpriseNetworks
 */
class SecurityGroupSettings extends Shape
{
    /**
     * @param array{
     *     alwaysReauthenticate?: bool|null,
     *     atakPackageValues?: list<string>|null,
     *     calling?: CallingSettings|null,
     *     checkForUpdates?: bool|null,
     *     enableAtak?: bool|null,
     *     enableCrashReports?: bool|null,
     *     enableFileDownload?: bool|null,
     *     enableGuestFederation?: bool|null,
     *     enableNotificationPreview?: bool|null,
     *     enableOpenAccessOption?: bool|null,
     *     enableRestrictedGlobalFederation?: bool|null,
     *     filesEnabled?: bool|null,
     *     forceDeviceLockout?: int|null,
     *     forceOpenAccess?: bool|null,
     *     forceReadReceipts?: bool|null,
     *     globalFederation?: bool|null,
     *     isAtoEnabled?: bool|null,
     *     isLinkPreviewEnabled?: bool|null,
     *     locationAllowMaps?: bool|null,
     *     locationEnabled?: bool|null,
     *     maxAutoDownloadSize?: int|null,
     *     maxBor?: int|null,
     *     maxTtl?: int|null,
     *     messageForwardingEnabled?: bool|null,
     *     passwordRequirements?: PasswordRequirements|null,
     *     presenceEnabled?: bool|null,
     *     quickResponses?: list<string>|null,
     *     showMasterRecoveryKey?: bool|null,
     *     shredder?: ShredderSettings|null,
     *     ssoMaxIdleMinutes?: int|null,
     *     federationMode?: int|null,
     *     lockoutThreshold?: int|null,
     *     permittedNetworks?: list<string>|null,
     *     permittedWickrAwsNetworks?: list<WickrAwsNetworks>|null,
     *     permittedWickrEnterpriseNetworks?: list<PermittedWickrEnterpriseNetwork>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
