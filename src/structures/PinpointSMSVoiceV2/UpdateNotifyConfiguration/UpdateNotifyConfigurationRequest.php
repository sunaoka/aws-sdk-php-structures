<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdateNotifyConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotifyConfigurationId
 * @property string|null $DefaultTemplateId
 * @property string|null $PoolId
 * @property list<string>|null $EnabledCountries
 * @property list<'SMS'|'VOICE'|'MMS'|'RCS'>|null $EnabledChannels
 * @property bool|null $DeletionProtectionEnabled
 */
class UpdateNotifyConfigurationRequest extends Request
{
    /**
     * @param array{
     *     NotifyConfigurationId: string,
     *     DefaultTemplateId?: string|null,
     *     PoolId?: string|null,
     *     EnabledCountries?: list<string>|null,
     *     EnabledChannels?: list<'SMS'|'VOICE'|'MMS'|'RCS'>|null,
     *     DeletionProtectionEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
