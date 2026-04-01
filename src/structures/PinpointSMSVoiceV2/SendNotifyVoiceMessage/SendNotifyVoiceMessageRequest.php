<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendNotifyVoiceMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotifyConfigurationId
 * @property string $DestinationPhoneNumber
 * @property string|null $TemplateId
 * @property array<string, string> $TemplateVariables
 * @property 'AMY'|'ASTRID'|'BIANCA'|'BRIAN'|'CAMILA'|'CARLA'|'CARMEN'|'CELINE'|'CHANTAL'|'CONCHITA'|'CRISTIANO'|'DORA'|'EMMA'|'ENRIQUE'|'EWA'|'FILIZ'|'GERAINT'|'GIORGIO'|'GWYNETH'|'HANS'|'INES'|'IVY'|'JACEK'|'JAN'|'JOANNA'|'JOEY'|'JUSTIN'|'KARL'|'KENDRA'|'KIMBERLY'|'LEA'|'LIV'|'LOTTE'|'LUCIA'|'LUPE'|'MADS'|'MAJA'|'MARLENE'|'MATHIEU'|'MATTHEW'|'MAXIM'|'MIA'|'MIGUEL'|'MIZUKI'|'NAJA'|'NICOLE'|'PENELOPE'|'RAVEENA'|'RICARDO'|'RUBEN'|'RUSSELL'|'SALLI'|'SEOYEON'|'TAKUMI'|'TATYANA'|'VICKI'|'VITORIA'|'ZEINA'|'ZHIYU'|null $VoiceId
 * @property int<5, 259200>|null $TimeToLive
 * @property array<string, string>|null $Context
 * @property string|null $ConfigurationSetName
 * @property bool|null $DryRun
 * @property bool|null $MessageFeedbackEnabled
 */
class SendNotifyVoiceMessageRequest extends Request
{
    /**
     * @param array{
     *     NotifyConfigurationId: string,
     *     DestinationPhoneNumber: string,
     *     TemplateId?: string|null,
     *     TemplateVariables: array<string, string>,
     *     VoiceId?: 'AMY'|'ASTRID'|'BIANCA'|'BRIAN'|'CAMILA'|'CARLA'|'CARMEN'|'CELINE'|'CHANTAL'|'CONCHITA'|'CRISTIANO'|'DORA'|'EMMA'|'ENRIQUE'|'EWA'|'FILIZ'|'GERAINT'|'GIORGIO'|'GWYNETH'|'HANS'|'INES'|'IVY'|'JACEK'|'JAN'|'JOANNA'|'JOEY'|'JUSTIN'|'KARL'|'KENDRA'|'KIMBERLY'|'LEA'|'LIV'|'LOTTE'|'LUCIA'|'LUPE'|'MADS'|'MAJA'|'MARLENE'|'MATHIEU'|'MATTHEW'|'MAXIM'|'MIA'|'MIGUEL'|'MIZUKI'|'NAJA'|'NICOLE'|'PENELOPE'|'RAVEENA'|'RICARDO'|'RUBEN'|'RUSSELL'|'SALLI'|'SEOYEON'|'TAKUMI'|'TATYANA'|'VICKI'|'VITORIA'|'ZEINA'|'ZHIYU'|null,
     *     TimeToLive?: int<5, 259200>|null,
     *     Context?: array<string, string>|null,
     *     ConfigurationSetName?: string|null,
     *     DryRun?: bool|null,
     *     MessageFeedbackEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
