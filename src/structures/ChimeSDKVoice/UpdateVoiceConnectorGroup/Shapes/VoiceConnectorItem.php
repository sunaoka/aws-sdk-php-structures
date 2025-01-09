<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdateVoiceConnectorGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VoiceConnectorId
 * @property int<1, 99> $Priority
 */
class VoiceConnectorItem extends Shape
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     Priority: int<1, 99>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
