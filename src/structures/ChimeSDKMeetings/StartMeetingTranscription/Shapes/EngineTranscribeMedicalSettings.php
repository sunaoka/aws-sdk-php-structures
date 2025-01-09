<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\StartMeetingTranscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'en-US' $LanguageCode
 * @property 'PRIMARYCARE'|'CARDIOLOGY'|'NEUROLOGY'|'ONCOLOGY'|'RADIOLOGY'|'UROLOGY' $Specialty
 * @property 'CONVERSATION'|'DICTATION' $Type
 * @property string $VocabularyName
 * @property 'us-east-1'|'us-east-2'|'us-west-2'|'ap-southeast-2'|'ca-central-1'|'eu-west-1'|'auto' $Region
 * @property 'PHI' $ContentIdentificationType
 */
class EngineTranscribeMedicalSettings extends Shape
{
    /**
     * @param array{
     *     LanguageCode: 'en-US',
     *     Specialty: 'PRIMARYCARE'|'CARDIOLOGY'|'NEUROLOGY'|'ONCOLOGY'|'RADIOLOGY'|'UROLOGY',
     *     Type: 'CONVERSATION'|'DICTATION',
     *     VocabularyName?: string,
     *     Region?: 'us-east-1'|'us-east-2'|'us-west-2'|'ap-southeast-2'|'ca-central-1'|'eu-west-1'|'auto',
     *     ContentIdentificationType?: 'PHI'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
