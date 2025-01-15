<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlotType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UseSlotValuesAsCustomVocabulary'|null $audioRecognitionStrategy
 */
class AdvancedRecognitionSetting extends Shape
{
    /**
     * @param array{audioRecognitionStrategy?: 'UseSlotValuesAsCustomVocabulary'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
