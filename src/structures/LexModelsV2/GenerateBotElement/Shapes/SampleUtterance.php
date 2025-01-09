<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\GenerateBotElement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $utterance
 */
class SampleUtterance extends Shape
{
    /**
     * @param array{utterance: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
