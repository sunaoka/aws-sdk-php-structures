<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property BedrockModelSpecification $bedrockModelSpecification
 */
class SlotResolutionImprovementSpecification extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     bedrockModelSpecification?: BedrockModelSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
