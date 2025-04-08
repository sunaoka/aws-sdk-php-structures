<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeSMBSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $GatewayARN
 * @property string|null $DomainName
 * @property 'ACCESS_DENIED'|'DETACHED'|'JOINED'|'JOINING'|'NETWORK_ERROR'|'TIMEOUT'|'UNKNOWN_ERROR'|'INSUFFICIENT_PERMISSIONS'|null $ActiveDirectoryStatus
 * @property bool|null $SMBGuestPasswordSet
 * @property 'ClientSpecified'|'MandatorySigning'|'MandatoryEncryption'|'MandatoryEncryptionNoAes128'|null $SMBSecurityStrategy
 * @property bool|null $FileSharesVisible
 * @property Shapes\SMBLocalGroups|null $SMBLocalGroups
 */
class DescribeSMBSettingsResponse extends Response
{
}
