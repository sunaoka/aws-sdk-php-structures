<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DescriptiveBotBuilderSpecification $descriptiveBotBuilder
 * @property SampleUtteranceGenerationSpecification $sampleUtteranceGeneration
 */
class BuildtimeSettings extends Shape
{
    /**
     * @param array{
     *     descriptiveBotBuilder?: DescriptiveBotBuilderSpecification,
     *     sampleUtteranceGeneration?: SampleUtteranceGenerationSpecification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
