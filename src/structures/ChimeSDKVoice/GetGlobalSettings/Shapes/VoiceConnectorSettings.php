<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetGlobalSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CdrBucket
 */
class VoiceConnectorSettings extends Shape
{
    /**
     * @param array{CdrBucket?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
