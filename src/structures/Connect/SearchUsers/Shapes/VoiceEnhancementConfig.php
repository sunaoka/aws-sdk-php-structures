<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VOICE'|'CHAT'|'TASK'|'EMAIL' $Channel
 * @property 'VOICE_ISOLATION'|'NOISE_SUPPRESSION'|'NONE' $VoiceEnhancementMode
 */
class VoiceEnhancementConfig extends Shape
{
    /**
     * @param array{
     *     Channel: 'VOICE'|'CHAT'|'TASK'|'EMAIL',
     *     VoiceEnhancementMode: 'VOICE_ISOLATION'|'NOISE_SUPPRESSION'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
