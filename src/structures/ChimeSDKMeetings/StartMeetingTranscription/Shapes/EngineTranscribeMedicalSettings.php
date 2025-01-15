<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\StartMeetingTranscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'en-US' $LanguageCode
 * @property 'PRIMARYCARE'|'CARDIOLOGY'|'NEUROLOGY'|'ONCOLOGY'|'RADIOLOGY'|'UROLOGY' $Specialty
 * @property 'CONVERSATION'|'DICTATION' $Type
 * @property string|null $VocabularyName
 * @property 'us-east-1'|'us-east-2'|'us-west-2'|'ap-southeast-2'|'ca-central-1'|'eu-west-1'|'auto'|null $Region
 * @property 'PHI'|null $ContentIdentificationType
 */
class EngineTranscribeMedicalSettings extends Shape
{
    /**
     * @param array{
     *     LanguageCode: 'en-US',
     *     Specialty: 'PRIMARYCARE'|'CARDIOLOGY'|'NEUROLOGY'|'ONCOLOGY'|'RADIOLOGY'|'UROLOGY',
     *     Type: 'CONVERSATION'|'DICTATION',
     *     VocabularyName?: string|null,
     *     Region?: 'us-east-1'|'us-east-2'|'us-west-2'|'ap-southeast-2'|'ca-central-1'|'eu-west-1'|'auto'|null,
     *     ContentIdentificationType?: 'PHI'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
