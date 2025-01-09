<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SlotDefaultValueSpecification $defaultValueSpecification
 * @property 'Required'|'Optional' $slotConstraint
 * @property PromptSpecification $promptSpecification
 * @property list<SampleUtterance> $sampleUtterances
 * @property WaitAndContinueSpecification $waitAndContinueSpecification
 * @property SlotCaptureSetting $slotCaptureSetting
 * @property SlotResolutionSetting $slotResolutionSetting
 */
class SlotValueElicitationSetting extends Shape
{
    /**
     * @param array{
     *     defaultValueSpecification?: SlotDefaultValueSpecification,
     *     slotConstraint: 'Required'|'Optional',
     *     promptSpecification?: PromptSpecification,
     *     sampleUtterances?: list<SampleUtterance>,
     *     waitAndContinueSpecification?: WaitAndContinueSpecification,
     *     slotCaptureSetting?: SlotCaptureSetting,
     *     slotResolutionSetting?: SlotResolutionSetting
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
