<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetGlobalSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CdrBucket
 */
class VoiceConnectorSettings extends Shape
{
    /**
     * @param array{CdrBucket?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
