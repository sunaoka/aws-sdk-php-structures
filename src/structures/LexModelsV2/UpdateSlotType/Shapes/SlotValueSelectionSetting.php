<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlotType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OriginalValue'|'TopResolution'|'Concatenation' $resolutionStrategy
 * @property SlotValueRegexFilter|null $regexFilter
 * @property AdvancedRecognitionSetting|null $advancedRecognitionSetting
 */
class SlotValueSelectionSetting extends Shape
{
    /**
     * @param array{
     *     resolutionStrategy: 'OriginalValue'|'TopResolution'|'Concatenation',
     *     regexFilter?: SlotValueRegexFilter|null,
     *     advancedRecognitionSetting?: AdvancedRecognitionSetting|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
