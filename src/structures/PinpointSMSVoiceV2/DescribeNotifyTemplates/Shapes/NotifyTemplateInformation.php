<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeNotifyTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TemplateId
 * @property int<1, max> $Version
 * @property 'OTP_VERIFICATION' $TemplateType
 * @property list<'SMS'|'VOICE'|'MMS'|'RCS'> $Channels
 * @property list<'BASIC'|'ADVANCED'>|null $TierAccess
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 * @property list<string>|null $SupportedCountries
 * @property string|null $LanguageCode
 * @property string|null $Content
 * @property array<string, TemplateVariableMetadata>|null $Variables
 * @property list<'AMY'|'ASTRID'|'BIANCA'|'BRIAN'|'CAMILA'|'CARLA'|'CARMEN'|'CELINE'|'CHANTAL'|'CONCHITA'|'CRISTIANO'|'DORA'|'EMMA'|'ENRIQUE'|'EWA'|'FILIZ'|'GERAINT'|'GIORGIO'|'GWYNETH'|'HANS'|'INES'|'IVY'|'JACEK'|'JAN'|'JOANNA'|'JOEY'|'JUSTIN'|'KARL'|'KENDRA'|'KIMBERLY'|'LEA'|'LIV'|'LOTTE'|'LUCIA'|'LUPE'|'MADS'|'MAJA'|'MARLENE'|'MATHIEU'|'MATTHEW'|'MAXIM'|'MIA'|'MIGUEL'|'MIZUKI'|'NAJA'|'NICOLE'|'PENELOPE'|'RAVEENA'|'RICARDO'|'RUBEN'|'RUSSELL'|'SALLI'|'SEOYEON'|'TAKUMI'|'TATYANA'|'VICKI'|'VITORIA'|'ZEINA'|'ZHIYU'>|null $SupportedVoiceIds
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class NotifyTemplateInformation extends Shape
{
    /**
     * @param array{
     *     TemplateId: string,
     *     Version: int<1, max>,
     *     TemplateType: 'OTP_VERIFICATION',
     *     Channels: list<'SMS'|'VOICE'|'MMS'|'RCS'>,
     *     TierAccess?: list<'BASIC'|'ADVANCED'>|null,
     *     Status?: 'ACTIVE'|'INACTIVE'|null,
     *     SupportedCountries?: list<string>|null,
     *     LanguageCode?: string|null,
     *     Content?: string|null,
     *     Variables?: array<string, TemplateVariableMetadata>|null,
     *     SupportedVoiceIds?: list<'AMY'|'ASTRID'|'BIANCA'|'BRIAN'|'CAMILA'|'CARLA'|'CARMEN'|'CELINE'|'CHANTAL'|'CONCHITA'|'CRISTIANO'|'DORA'|'EMMA'|'ENRIQUE'|'EWA'|'FILIZ'|'GERAINT'|'GIORGIO'|'GWYNETH'|'HANS'|'INES'|'IVY'|'JACEK'|'JAN'|'JOANNA'|'JOEY'|'JUSTIN'|'KARL'|'KENDRA'|'KIMBERLY'|'LEA'|'LIV'|'LOTTE'|'LUCIA'|'LUPE'|'MADS'|'MAJA'|'MARLENE'|'MATHIEU'|'MATTHEW'|'MAXIM'|'MIA'|'MIGUEL'|'MIZUKI'|'NAJA'|'NICOLE'|'PENELOPE'|'RAVEENA'|'RICARDO'|'RUBEN'|'RUSSELL'|'SALLI'|'SEOYEON'|'TAKUMI'|'TATYANA'|'VICKI'|'VITORIA'|'ZEINA'|'ZHIYU'>|null,
     *     CreatedTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
