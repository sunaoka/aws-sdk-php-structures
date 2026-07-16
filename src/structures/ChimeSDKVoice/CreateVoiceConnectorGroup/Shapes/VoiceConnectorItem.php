<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreateVoiceConnectorGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VoiceConnectorId
 * @property int<1, 99>|null $Priority
 */
class VoiceConnectorItem extends Shape
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     Priority?: int<1, 99>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
