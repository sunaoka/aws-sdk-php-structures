<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SlotDefaultValueSpecification $defaultValueSpecification
 * @property PromptSpecification $promptSpecification
 * @property list<SampleUtterance> $sampleUtterances
 * @property WaitAndContinueSpecification $waitAndContinueSpecification
 */
class SubSlotValueElicitationSetting extends Shape
{
    /**
     * @param array{
     *     defaultValueSpecification?: SlotDefaultValueSpecification,
     *     promptSpecification: PromptSpecification,
     *     sampleUtterances?: list<SampleUtterance>,
     *     waitAndContinueSpecification?: WaitAndContinueSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
