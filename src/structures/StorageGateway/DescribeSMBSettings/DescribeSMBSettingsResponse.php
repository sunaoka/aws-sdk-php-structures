<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeSMBSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GatewayARN
 * @property string $DomainName
 * @property 'ACCESS_DENIED'|'DETACHED'|'JOINED'|'JOINING'|'NETWORK_ERROR'|'TIMEOUT'|'UNKNOWN_ERROR' $ActiveDirectoryStatus
 * @property bool $SMBGuestPasswordSet
 * @property 'ClientSpecified'|'MandatorySigning'|'MandatoryEncryption'|'MandatoryEncryptionNoAes128' $SMBSecurityStrategy
 * @property bool $FileSharesVisible
 * @property Shapes\SMBLocalGroups $SMBLocalGroups
 */
class DescribeSMBSettingsResponse extends Response
{
}
