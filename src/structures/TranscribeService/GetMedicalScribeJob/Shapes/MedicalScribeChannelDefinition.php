<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetMedicalScribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 1> $ChannelId
 * @property 'PATIENT'|'CLINICIAN' $ParticipantRole
 */
class MedicalScribeChannelDefinition extends Shape
{
    /**
     * @param array{
     *     ChannelId: int<0, 1>,
     *     ParticipantRole: 'PATIENT'|'CLINICIAN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
