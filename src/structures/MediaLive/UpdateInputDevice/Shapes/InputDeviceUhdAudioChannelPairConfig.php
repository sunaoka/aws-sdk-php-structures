<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInputDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Id
 * @property 'DISABLED'|'VBR-AAC_HHE-16000'|'VBR-AAC_HE-64000'|'VBR-AAC_LC-128000'|'CBR-AAC_HQ-192000'|'CBR-AAC_HQ-256000'|'CBR-AAC_HQ-384000'|'CBR-AAC_HQ-512000' $Profile
 */
class InputDeviceUhdAudioChannelPairConfig extends Shape
{
    /**
     * @param array{
     *     Id?: int,
     *     Profile?: 'DISABLED'|'VBR-AAC_HHE-16000'|'VBR-AAC_HE-64000'|'VBR-AAC_LC-128000'|'CBR-AAC_HQ-192000'|'CBR-AAC_HQ-256000'|'CBR-AAC_HQ-384000'|'CBR-AAC_HQ-512000'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
