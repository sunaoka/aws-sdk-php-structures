<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $voiceId
 * @property 'standard'|'neural'|'long-form'|'generative' $engine
 */
class VoiceSettings extends Shape
{
    /**
     * @param array{
     *     voiceId: string,
     *     engine?: 'standard'|'neural'|'long-form'|'generative'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
