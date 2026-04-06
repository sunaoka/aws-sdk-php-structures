<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property BedrockModelSpecification|null $bedrockModelSpecification
 */
class SlotResolutionImprovementSpecification extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     bedrockModelSpecification?: BedrockModelSpecification|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
