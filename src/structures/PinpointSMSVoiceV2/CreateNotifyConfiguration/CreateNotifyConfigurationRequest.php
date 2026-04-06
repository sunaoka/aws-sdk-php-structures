<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateNotifyConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DisplayName
 * @property 'CODE_VERIFICATION' $UseCase
 * @property string|null $DefaultTemplateId
 * @property string|null $PoolId
 * @property list<string>|null $EnabledCountries
 * @property list<'SMS'|'VOICE'|'MMS'|'RCS'> $EnabledChannels
 * @property bool|null $DeletionProtectionEnabled
 * @property string|null $ClientToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateNotifyConfigurationRequest extends Request
{
    /**
     * @param array{
     *     DisplayName: string,
     *     UseCase: 'CODE_VERIFICATION',
     *     DefaultTemplateId?: string|null,
     *     PoolId?: string|null,
     *     EnabledCountries?: list<string>|null,
     *     EnabledChannels: list<'SMS'|'VOICE'|'MMS'|'RCS'>,
     *     DeletionProtectionEnabled?: bool|null,
     *     ClientToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
