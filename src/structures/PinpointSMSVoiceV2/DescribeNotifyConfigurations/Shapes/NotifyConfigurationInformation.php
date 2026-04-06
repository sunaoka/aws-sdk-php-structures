<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeNotifyConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
class NotifyConfigurationInformation extends Shape
{
    /**
     * @param array{
     *     NotifyConfigurationArn: string,
     *     NotifyConfigurationId: string,
     *     DisplayName: string,
     *     UseCase: 'CODE_VERIFICATION',
     *     DefaultTemplateId?: string|null,
     *     PoolId?: string|null,
     *     EnabledCountries?: list<string>|null,
     *     EnabledChannels: list<'SMS'|'VOICE'|'MMS'|'RCS'>,
     *     Tier: 'BASIC'|'ADVANCED',
     *     TierUpgradeStatus: 'BASIC'|'PENDING_UPGRADE'|'ADVANCED'|'REJECTED',
     *     Status: 'PENDING'|'ACTIVE'|'REJECTED'|'REQUIRES_VERIFICATION',
     *     RejectionReason?: string|null,
     *     DeletionProtectionEnabled: bool,
     *     CreatedTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
