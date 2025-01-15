<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $textInput
 * @property UtteranceAudioInputSpecification|null $audioInput
 */
class UtteranceInputSpecification extends Shape
{
    /**
     * @param array{
     *     textInput?: string|null,
     *     audioInput?: UtteranceAudioInputSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
