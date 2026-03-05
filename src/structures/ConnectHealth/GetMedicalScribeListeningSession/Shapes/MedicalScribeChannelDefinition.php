<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetMedicalScribeListeningSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 1> $channelId
 * @property 'PATIENT'|'CLINICIAN' $participantRole
 */
class MedicalScribeChannelDefinition extends Shape
{
    /**
     * @param array{
     *     channelId: int<0, 1>,
     *     participantRole: 'PATIENT'|'CLINICIAN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
