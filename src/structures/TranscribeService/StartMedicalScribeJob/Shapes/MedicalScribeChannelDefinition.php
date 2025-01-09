<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartMedicalScribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ChannelId
 * @property 'PATIENT'|'CLINICIAN' $ParticipantRole
 */
class MedicalScribeChannelDefinition extends Shape
{
    /**
     * @param array{
     *     ChannelId: int,
     *     ParticipantRole: 'PATIENT'|'CLINICIAN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
