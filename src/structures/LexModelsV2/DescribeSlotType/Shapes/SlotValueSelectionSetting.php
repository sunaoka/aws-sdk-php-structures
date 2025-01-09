<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlotType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OriginalValue'|'TopResolution'|'Concatenation' $resolutionStrategy
 * @property SlotValueRegexFilter $regexFilter
 * @property AdvancedRecognitionSetting $advancedRecognitionSetting
 */
class SlotValueSelectionSetting extends Shape
{
    /**
     * @param array{
     *     resolutionStrategy: 'OriginalValue'|'TopResolution'|'Concatenation',
     *     regexFilter?: SlotValueRegexFilter,
     *     advancedRecognitionSetting?: AdvancedRecognitionSetting
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
