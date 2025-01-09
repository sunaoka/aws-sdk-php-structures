<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlotType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UseSlotValuesAsCustomVocabulary' $audioRecognitionStrategy
 */
class AdvancedRecognitionSetting extends Shape
{
    /**
     * @param array{audioRecognitionStrategy?: 'UseSlotValuesAsCustomVocabulary'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
