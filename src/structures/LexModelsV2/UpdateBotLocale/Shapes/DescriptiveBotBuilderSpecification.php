<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property BedrockModelSpecification $bedrockModelSpecification
 */
class DescriptiveBotBuilderSpecification extends Shape
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
