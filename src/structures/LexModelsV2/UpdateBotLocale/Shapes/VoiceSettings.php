<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'standard'|'neural'|'long-form'|'generative'|null $engine
 * @property string $voiceId
 */
class VoiceSettings extends Shape
{
    /**
     * @param array{
     *     engine?: 'standard'|'neural'|'long-form'|'generative'|null,
     *     voiceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
