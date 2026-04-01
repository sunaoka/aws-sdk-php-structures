<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteNotifyConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $NotifyConfigurationArn
 * @property string $NotifyConfigurationId
 * @property string $DisplayName
 * @property 'CODE_VERIFICATION' $UseCase
 * @property string|null $DefaultTemplateId
 * @property string|null $PoolId
 * @property list<string>|null $EnabledCountries
 * @property list<'SMS'|'VOICE'|'MMS'|'RCS'> $EnabledChannels
 * @property 'BASIC'|'ADVANCED' $Tier
 * @property 'BASIC'|'PENDING_UPGRADE'|'ADVANCED'|'REJECTED' $TierUpgradeStatus
 * @property 'PENDING'|'ACTIVE'|'REJECTED'|'REQUIRES_VERIFICATION' $Status
 * @property string|null $RejectionReason
 * @property bool $DeletionProtectionEnabled
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class DeleteNotifyConfigurationResponse extends Response
{
}
