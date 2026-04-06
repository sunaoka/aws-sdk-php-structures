<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SlotDefaultValueSpecification|null $defaultValueSpecification
 * @property 'Required'|'Optional' $slotConstraint
 * @property PromptSpecification|null $promptSpecification
 * @property list<SampleUtterance>|null $sampleUtterances
 * @property WaitAndContinueSpecification|null $waitAndContinueSpecification
 * @property SlotCaptureSetting|null $slotCaptureSetting
 * @property SlotResolutionSetting|null $slotResolutionSetting
 */
class SlotValueElicitationSetting extends Shape
{
    /**
     * @param array{
     *     defaultValueSpecification?: SlotDefaultValueSpecification|null,
     *     slotConstraint: 'Required'|'Optional',
     *     promptSpecification?: PromptSpecification|null,
     *     sampleUtterances?: list<SampleUtterance>|null,
     *     waitAndContinueSpecification?: WaitAndContinueSpecification|null,
     *     slotCaptureSetting?: SlotCaptureSetting|null,
     *     slotResolutionSetting?: SlotResolutionSetting|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
