<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendVoiceMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationPhoneNumber
 * @property string $OriginationIdentity
 * @property string $MessageBody
 * @property 'TEXT'|'SSML' $MessageBodyTextType
 * @property 'AMY'|'ASTRID'|'BIANCA'|'BRIAN'|'CAMILA'|'CARLA'|'CARMEN'|'CELINE'|'CHANTAL'|'CONCHITA'|'CRISTIANO'|'DORA'|'EMMA'|'ENRIQUE'|'EWA'|'FILIZ'|'GERAINT'|'GIORGIO'|'GWYNETH'|'HANS'|'INES'|'IVY'|'JACEK'|'JAN'|'JOANNA'|'JOEY'|'JUSTIN'|'KARL'|'KENDRA'|'KIMBERLY'|'LEA'|'LIV'|'LOTTE'|'LUCIA'|'LUPE'|'MADS'|'MAJA'|'MARLENE'|'MATHIEU'|'MATTHEW'|'MAXIM'|'MIA'|'MIGUEL'|'MIZUKI'|'NAJA'|'NICOLE'|'PENELOPE'|'RAVEENA'|'RICARDO'|'RUBEN'|'RUSSELL'|'SALLI'|'SEOYEON'|'TAKUMI'|'TATYANA'|'VICKI'|'VITORIA'|'ZEINA'|'ZHIYU' $VoiceId
 * @property string $ConfigurationSetName
 * @property string $MaxPricePerMinute
 * @property int $TimeToLive
 * @property array<string, string> $Context
 * @property bool $DryRun
 * @property string $ProtectConfigurationId
 * @property bool $MessageFeedbackEnabled
 */
class SendVoiceMessageRequest extends Request
{
    /**
     * @param array{
     *     DestinationPhoneNumber: string,
     *     OriginationIdentity: string,
     *     MessageBody?: string,
     *     MessageBodyTextType?: 'TEXT'|'SSML',
     *     VoiceId?: 'AMY'|'ASTRID'|'BIANCA'|'BRIAN'|'CAMILA'|'CARLA'|'CARMEN'|'CELINE'|'CHANTAL'|'CONCHITA'|'CRISTIANO'|'DORA'|'EMMA'|'ENRIQUE'|'EWA'|'FILIZ'|'GERAINT'|'GIORGIO'|'GWYNETH'|'HANS'|'INES'|'IVY'|'JACEK'|'JAN'|'JOANNA'|'JOEY'|'JUSTIN'|'KARL'|'KENDRA'|'KIMBERLY'|'LEA'|'LIV'|'LOTTE'|'LUCIA'|'LUPE'|'MADS'|'MAJA'|'MARLENE'|'MATHIEU'|'MATTHEW'|'MAXIM'|'MIA'|'MIGUEL'|'MIZUKI'|'NAJA'|'NICOLE'|'PENELOPE'|'RAVEENA'|'RICARDO'|'RUBEN'|'RUSSELL'|'SALLI'|'SEOYEON'|'TAKUMI'|'TATYANA'|'VICKI'|'VITORIA'|'ZEINA'|'ZHIYU',
     *     ConfigurationSetName?: string,
     *     MaxPricePerMinute?: string,
     *     TimeToLive?: int,
     *     Context?: array<string, string>,
     *     DryRun?: bool,
     *     ProtectConfigurationId?: string,
     *     MessageFeedbackEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
