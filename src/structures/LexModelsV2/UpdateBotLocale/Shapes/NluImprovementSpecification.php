<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 */
class NluImprovementSpecification extends Shape
{
    /**
     * @param array{enabled: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
