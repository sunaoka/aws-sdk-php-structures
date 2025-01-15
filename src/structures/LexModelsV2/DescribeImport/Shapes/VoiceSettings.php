<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $voiceId
 * @property 'standard'|'neural'|'long-form'|'generative'|null $engine
 */
class VoiceSettings extends Shape
{
    /**
     * @param array{
     *     voiceId: string,
     *     engine?: 'standard'|'neural'|'long-form'|'generative'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
