<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendDestinationNumberVerificationCode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedDestinationNumberId
 * @property 'TEXT'|'VOICE' $VerificationChannel
 * @property 'DE_DE'|'EN_GB'|'EN_US'|'ES_419'|'ES_ES'|'FR_CA'|'FR_FR'|'IT_IT'|'JA_JP'|'KO_KR'|'PT_BR'|'ZH_CN'|'ZH_TW' $LanguageCode
 * @property string $OriginationIdentity
 * @property string $ConfigurationSetName
 * @property array<string, string> $Context
 * @property array<'IN_TEMPLATE_ID'|'IN_ENTITY_ID', string> $DestinationCountryParameters
 */
class SendDestinationNumberVerificationCodeRequest extends Request
{
    /**
     * @param array{
     *     VerifiedDestinationNumberId: string,
     *     VerificationChannel: 'TEXT'|'VOICE',
     *     LanguageCode?: 'DE_DE'|'EN_GB'|'EN_US'|'ES_419'|'ES_ES'|'FR_CA'|'FR_FR'|'IT_IT'|'JA_JP'|'KO_KR'|'PT_BR'|'ZH_CN'|'ZH_TW',
     *     OriginationIdentity?: string,
     *     ConfigurationSetName?: string,
     *     Context?: array<string, string>,
     *     DestinationCountryParameters?: array<'IN_TEMPLATE_ID'|'IN_ENTITY_ID', string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
