<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SlotDefaultValueSpecification|null $defaultValueSpecification
 * @property PromptSpecification $promptSpecification
 * @property list<SampleUtterance>|null $sampleUtterances
 * @property WaitAndContinueSpecification|null $waitAndContinueSpecification
 */
class SubSlotValueElicitationSetting extends Shape
{
    /**
     * @param array{
     *     defaultValueSpecification?: SlotDefaultValueSpecification|null,
     *     promptSpecification: PromptSpecification,
     *     sampleUtterances?: list<SampleUtterance>|null,
     *     waitAndContinueSpecification?: WaitAndContinueSpecification|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
