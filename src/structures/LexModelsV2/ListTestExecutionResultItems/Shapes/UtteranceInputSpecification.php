<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $textInput
 * @property UtteranceAudioInputSpecification $audioInput
 */
class UtteranceInputSpecification extends Shape
{
    /**
     * @param array{
     *     textInput?: string,
     *     audioInput?: UtteranceAudioInputSpecification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
