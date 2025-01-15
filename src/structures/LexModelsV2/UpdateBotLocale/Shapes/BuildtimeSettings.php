<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DescriptiveBotBuilderSpecification|null $descriptiveBotBuilder
 * @property SampleUtteranceGenerationSpecification|null $sampleUtteranceGeneration
 */
class BuildtimeSettings extends Shape
{
    /**
     * @param array{
     *     descriptiveBotBuilder?: DescriptiveBotBuilderSpecification|null,
     *     sampleUtteranceGeneration?: SampleUtteranceGenerationSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
